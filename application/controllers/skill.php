<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class skill extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->load->model(array(
			'skill_model',
			));

		if (!$this->tank_auth->is_logged_in()) {
			$this->session->set_userdata('last_page', current_url());
			redirect('auth/login');
		} else {
			$this->smarty->assign('is_logged_in', 1);
			$this->smarty->assign('username', $this->session->userdata('username'));
			$this->smarty->assign('ava_url', $this->session->userdata('ava') ? $this->session->userdata('ava') : 'uploads/ava/no_ava.jpg');
		}

		$this->smarty->assign('nav_active', 'my_skill');
	}

	function backup() {
		// Load the DB utility class
		$this->load->dbutil();

		// Backup your entire database and assign it to a variable
		$file_name = date('YmdHis') . '.sql';
		$prefs = array(
            'tables'      => array(
            	'skillr_login_attempts',
            	'skillr_sessions',
            	'skillr_users',
            	'skillr_skill',
            	'skillr_user_autologin',
            	'skillr_user_profiles',
            	),  // Array of tables to backup.
            'ignore'      => array(),           // List of tables to omit from the backup
            'format'      => 'txt',             // gzip, zip, txt
            'filename'    => $file_name,    // File name - NEEDED ONLY WITH ZIP FILES
            'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
            'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
            'newline'     => "\n"               // Newline character used in backup file
        	);
		$backup =& $this->dbutil->backup($prefs); 

		// Load the file helper and write the file to your server
		$this->load->helper('file');
		if (write_file('./db/backup/' . $file_name, $backup)){
			echo 'Backup successfully.';
		} else {
			echo 'Backup fail. Try again.';
		}
	}

	function index() {
		$data = array();

		//declare form attributes
		$data['form_open'] = form_open('skill/create_skill', array(
			'id'	=> 'form-create',
			));
		$data['form_name'] = form_input(array(
			'type'	=> 'text',
			'name'	=> 'name',
			'class'	=> 'form-control',
			'placeholder' => 'Skill name',
			'maxlength'  => '256',
			));
		$data['form_description'] = form_input(array(
			'type'	=> 'text',
			'name'	=> 'description',
			'class'	=> 'form-control',
			'placeholder' => 'Short description',
			'maxlength'  => '256',
			));
		$data['form_note'] = form_textarea(array(
			'name'	=> 'note',
			'class'	=> 'form-control',
			'placeholder' => 'Note',
			'rows'	=> '3',
			'maxlength'  => '512',
			'style' => 'resize:none;',
			));
		$data['form_start_date'] = form_input(array(
			'type'	=> 'text',
			'name'	=> 'start_date',
			'class'	=> 'form-control default-date-picker',
			'placeholder' => 'Start date',
			));
		$data['form_end_date'] = form_input(array(
			'type'	=> 'text',
			'name'	=> 'end_date',
			'class'	=> 'form-control default-date-picker',
			'placeholder' => 'End date',
			));
		$data['form_submit'] = form_submit(array(
			'id'	=> 'btn-create',
			'type'	=> 'submit',
			'name'	=> 'submit',
			'class'	=> 'btn btn-danger pull-right',
			'value'	=> 'Save skill',
			'style'	=> 'margin-bottom:0;'
			));
		$data['form_close'] = form_close();

		//get skills list
		$data['skills_list'] = $this->skill_model->get_skills_list();

		if ($data['skills_list']) {
			$alert_messages = array(
				'time_to_go'	=> array(),
				'deadline_today'=> array(),
				'time_delayed'	=> array(),
				);

			foreach ($data['skills_list'] as $index=>$skill) {
				//calculate duration and time to go
				$now = date('Y-m-d');
				$start_date = $skill['start_date'];
				$end_date = $skill['end_date'];

				//duration
				$data['skills_list'][$index]['duration'] = timespan(mysql_to_unix($start_date), mysql_to_unix(date('Y-m-d', strtotime($end_date . ' + 1 days'))));
				//time to go and delay
				if (!$skill['is_done']) {
					if ($start_date <= $now && $now < $end_date) {
						$time_to_go = strtolower(timespan(mysql_to_unix($now), mysql_to_unix($end_date)));
						
						$data['skills_list'][$index]['time_to_go'] = $time_to_go . ' left';
						//alert message
						if ($time_to_go == '3 days' || $time_to_go == '2 days' || $time_to_go == '1 day') {
							array_push($alert_messages['time_to_go'], array(
								'skill_id'		=> $skill['id'],
								'skill_name'	=> $skill['name'],
								'time_to_go'	=> $time_to_go,
								));
						}
					} else if ($now == $end_date) {
						$data['skills_list'][$index]['time_to_go'] = 'Deadline today';
						//alert message
						array_push($alert_messages['deadline_today'], array(
							'skill_id'		=> $skill['id'],
							'skill_name'	=> $skill['name'],
							));
					} else if ($end_date < $now) {
						$time_delayed = strtolower(timespan(mysql_to_unix($end_date), mysql_to_unix($now)));

						$data['skills_list'][$index]['time_delayed'] = $time_delayed . ' delayed';
						//alert message
						array_push($alert_messages['time_delayed'], array(
							'skill_id'		=> $skill['id'],
							'skill_name'	=> $skill['name'],
							'time_delayed'	=> $time_delayed,
							));
					}
				}
			}
			$data['alert_messages'] = $alert_messages;
		}

		//external css
		$data['css_arr'] = array(
			'assets/js/bootstrap-datepicker/css/datepicker.css',
			);
		//external js
		$data['js_arr'] = array(
			'assets/js/jquery.autosize.js',
			'assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js',
			'assets/js/skill.js',
			);

		$this->smarty->view('skill/index', $data);
	}

	//ajax call---------------------------------------------------------------
	//create skill
	function create_skill () {
		//return result
		$result = array();

		if ($_POST) {
			//declare validation rules
			$validation_rules = array(
				array(
					'field'	=> 'name',
					'label'	=> 'Skill name',
					'rules' => 'required|trim|xss_clean|max_length[256]',
					),
				array(
					'field'	=> 'description',
					'label'	=> 'Description',
					'rules' => 'required|trim|xss_clean|max_length[256]',
					),
				array(
					'field'	=> 'note',
					'label'	=> 'Note',
					'rules' => 'trim|xss_clean',
					),
				array(
					'field'	=> 'start_date',
					'label'	=> 'Start date',
					'rules' => 'required|trim|xss_clean|callback_date_check',
					),
				array(
					'field'	=> 'end_date',
					'label'	=> 'End date',
					'rules' => 'required|trim|xss_clean|callback_date_check|callback_greater_date_check',
					),
				);

			//set validation rules
			$this->form_validation->set_rules($validation_rules);

			//validate
			if ($this->form_validation->run()) {
				$skill = array(
					'name'			=> $this->input->post('name'),
					'description'	=> $this->input->post('description'),
					'note'			=> $this->input->post('note'),
					'is_done'		=> 0,
					'start_date'	=> $this->input->post('start_date'),
					'end_date'		=> $this->input->post('end_date'),
					);
				//create skill
				if (!is_null($skill = $this->skill_model->create_skill($skill))) {
					$result['status'] = 1;
					$result['message'] = 'Created skill successfully.';

					//calculate duration and time to go
					$now = date('Y-m-d');
					$start_date = $skill['start_date'];
					$end_date = $skill['end_date'];

					//duration
					$skill['duration'] = timespan(mysql_to_unix($start_date), mysql_to_unix(date('Y-m-d', strtotime($end_date . ' + 1 days'))));
					//time to go and delay
					if ($start_date <= $now && $now < $end_date) {
						$skill['time_to_go'] = strtolower(timespan(mysql_to_unix($now), mysql_to_unix($end_date))) . ' left';
					} else if ($now == $end_date) {
						$skill['time_to_go'] = 'Deadline today';
					} else if ($end_date < $now) {
						$skill['time_delayed'] = strtolower(timespan(mysql_to_unix($end_date), mysql_to_unix($now))) . ' delayed';
					}

					$data['skill'] = $skill;
				 	$result['html'] = $this->smarty->view('skill/details', $data, TRUE);
				 	if ($prev_position = $this->skill_model->get_prev_position($skill['start_date']))
				 		$result['prev_position'] = $prev_position;
				} else {
					$result['status'] = 0;
					$result['message'] = 'Database server error. Created skill unsuccessfully.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = validation_errors();
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}
	function date_check ($date) {
		try {
			$date = date('yyyy-MM-dd', strtotime($date));
			return TRUE;
		} catch (Exception $e) {
			$this->form_validation->set_message('date_check', 'The %s field is not the valid date.');
			return FALSE;
		}
	}
	function greater_date_check ($end_date) {
		if (strtotime($end_date) > strtotime($this->input->post('start_date'))) {
			return TRUE;
		} else {
			$this->form_validation->set_message('greater_date_check', 'The %s field must be greater than "Start date".');
			return FALSE;
		}
	}

	//create skill
	function update_skill () {
		//return result
		$result = array();

		if ($_POST) {
			//declare validation rules
			$validation_rules = array(
				array(
					'field'	=> 'id',
					'label'	=> 'Skill Id',
					'rules' => 'required|trim|xss_clean|numeric',
					),
				array(
					'field'	=> 'name',
					'label'	=> 'Skill name',
					'rules' => 'required|trim|xss_clean|max_length[256]',
					),
				array(
					'field'	=> 'description',
					'label'	=> 'Description',
					'rules' => 'required|trim|xss_clean|max_length[256]',
					),
				array(
					'field'	=> 'note',
					'label'	=> 'Note',
					'rules' => 'trim|xss_clean',
					),
				array(
					'field'	=> 'start_date',
					'label'	=> 'Start date',
					'rules' => 'required|trim|xss_clean|callback_date_check',
					),
				array(
					'field'	=> 'end_date',
					'label'	=> 'End date',
					'rules' => 'required|trim|xss_clean|callback_date_check|callback_greater_date_check',
					),
				);

			//set validation rules
			$this->form_validation->set_rules($validation_rules);

			//validate
			if ($this->form_validation->run()) {
				$skill = array(
					'id'			=> $this->input->post('id'),
					'name'			=> $this->input->post('name'),
					'description'	=> $this->input->post('description'),
					'note'			=> $this->input->post('note'),
					'start_date'	=> $this->input->post('start_date'),
					'end_date'		=> $this->input->post('end_date'),
					'is_done'		=> $this->input->post('is_done'),
					);

				//check exist skill
				if ($this->skill_model->exist_check($this->input->post('id'))) {
					//create skill
					if (!is_null($this->skill_model->update_skill($skill))) {
						$result['status'] = 1;
						$result['message'] = 'Updated skill successfully.';

						//calculate duration and time to go
						$now = date('Y-m-d');
						$start_date = $skill['start_date'];
						$end_date = $skill['end_date'];

						//duration
						$skill['duration'] = timespan(mysql_to_unix($start_date), mysql_to_unix(date('Y-m-d', strtotime($end_date . ' + 1 days'))));
						//time to go and delay
						if (!$skill['is_done']) {
							if ($start_date <= $now && $now < $end_date) {
								$skill['time_to_go'] = strtolower(timespan(mysql_to_unix($now), mysql_to_unix($end_date))) . ' left';
							} else if ($now == $end_date) {
								$skill['time_to_go'] = 'Deadline today';
							} else if ($end_date < $now) {
								$skill['time_delayed'] = strtolower(timespan(mysql_to_unix($end_date), mysql_to_unix($now))) . ' delayed';
							}
						}

						$data['skill'] = $skill;
					 	$result['html'] = $this->smarty->view('skill/details', $data, TRUE);
					 	if ($prev_position = $this->skill_model->get_prev_position($skill['start_date']))
					 		$result['prev_position'] = $prev_position;
					} else {
						$result['status'] = 0;
						$result['message'] = 'Database server error. Updated skill unsuccessfully.';
					}//end create skill
				} else {
					$result['status'] = 0;
					$result['message'] = 'The input skill does not exist.';
				}//end check exist
			} else {
				$result['status'] = 0;
				$result['message'] = validation_errors();
			}//end validation
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	//get skill
	function get_skill () {
		//return result
		$result = array();

		if ($_GET) {
			//validate
			if (isset($_GET['id']) && !empty($_GET['id'])) {
				//get skill
				if (!is_null($skill = $this->skill_model->get_skill($this->input->get('id')))) {
					$result['skill'] = $skill;
					$result['status'] = 1;
					$result['message'] = 'Get skill successfully.';
				} else {
					$result['status'] = 0;
					$result['message'] = 'The input skill does not exist.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = 'The field Skill id is required.';
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	//delete skill
	function delete_skill () {
		//return result
		$result = array();

		if ($_POST) {
			//declare validation rules
			$validation_rules = array(
				array(
					'field'	=> 'id',
					'label'	=> 'Skill Id',
					'rules' => 'required|trim|xss_clean|numeric',
					),
				);

			//set validation rules
			$this->form_validation->set_rules($validation_rules);

			//validate
			if ($this->form_validation->run()) {
				//check exist
				if ($this->skill_model->exist_check($this->input->post('id'))) {
					//delete skill
					if (!is_null($this->skill_model->delete_skill($this->input->post('id')))) {
						$result['status'] = 1;
						$result['message'] = 'Deleted skill successfully.';
					} else {
						$result['status'] = 0;
						$result['message'] = 'Database server error. Deleted skill unsuccessfully.';
					}
				} else {
					$result['status'] = 0;
					$result['message'] = 'Sorry input skill does not exist.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = validation_errors();
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	//done skill
	function done_skill () {
		//return result
		$result = array();

		if ($_POST) {
			//declare validation rules
			$validation_rules = array(
				array(
					'field'	=> 'id',
					'label'	=> 'Skill Id',
					'rules' => 'required|trim|xss_clean|numeric',
					),
				);

			//set validation rules
			$this->form_validation->set_rules($validation_rules);

			//validate
			if ($this->form_validation->run()) {
				//check exist
				if ($this->skill_model->exist_check($this->input->post('id'))) {
					//done skill
					if (!is_null($this->skill_model->done_skill($this->input->post('id')))) {
						$result['status'] = 1;
						$result['message'] = 'Done skill successfully.';
					} else {
						$result['status'] = 0;
						$result['message'] = 'Database server error. Done skill unsuccessfully.';
					}
				} else {
					$result['status'] = 0;
					$result['message'] = 'Sorry input skill does not exist.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = validation_errors();
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	//undone skill
	function undone_skill () {
		//return result
		$result = array();

		if ($_POST) {
			//declare validation rules
			$validation_rules = array(
				array(
					'field'	=> 'id',
					'label'	=> 'Skill Id',
					'rules' => 'required|trim|xss_clean|numeric',
					),
				);

			//set validation rules
			$this->form_validation->set_rules($validation_rules);

			//validate
			if ($this->form_validation->run()) {
				//check exist
				if ($skill = $this->skill_model->get_skill($this->input->post('id'))) {
					//done skill
					if (!is_null($this->skill_model->undone_skill($this->input->post('id')))) {
						$result['status'] = 1;
						$result['message'] = 'Undone skill successfully.';

						//calculate time to go
						$now = date('Y-m-d');
						$start_date = $skill['start_date'];
						$end_date = $skill['end_date'];

						//time to go
						if ($start_date <= $now && $now < $end_date) {
							$result['time_to_go'] = strtolower(timespan(mysql_to_unix($now), mysql_to_unix($end_date))) . ' left';
						} else if ($now == $end_date) {
							$result['time_to_go'] = 'Deadline today';
						} else if ($end_date < $now) {
							$result['time_delayed'] = strtolower(timespan(mysql_to_unix($end_date), mysql_to_unix($now))) . ' delayed';
						}
					} else {
						$result['status'] = 0;
						$result['message'] = 'Database server error. Done skill unsuccessfully.';
					}
				} else {
					$result['status'] = 0;
					$result['message'] = 'Sorry input skill does not exist.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = validation_errors();
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'Error.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}
}