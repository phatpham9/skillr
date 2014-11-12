<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller
{

	function __construct() {
		parent::__construct();

		$this->load->library(array(
			'security',
			));
		$this->lang->load('tank_auth');
		$this->load->model(array(
			'tank_auth/users',
			));

		if (!$this->tank_auth->is_logged_in()) {
			$this->session->set_userdata('last_page', current_url());
		} else {
			$this->smarty->assign('is_logged_in', 1);
			$this->smarty->assign('username', $this->session->userdata('username'));
			$this->smarty->assign('ava_url', $this->session->userdata('ava') ? $this->session->userdata('ava') : 'uploads/ava/no_ava.jpg');
		}

		$this->smarty->assign('nav_active', 'profile');
	}

	function index() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}

		$data = array();

		//form change password
		$data['form_change_password_open'] = form_open('profile/change_password', array(
			'id'	=> 'form-change-password',
			));
		$data['form_old_password'] = form_password(array(
			'name'	=> 'old_password',
			'id'	=> 'old-password',
			'value' => $this->input->post('old_password'),
			'size' 	=> 30,
			'placeholder'	=> 'Old Password',
			'class'	=> 'form-control',
			));
		$data['form_new_password'] = form_password(array(
			'name'	=> 'new_password',
			'id'	=> 'new-password',
			'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
			'size'	=> 30,
			'placeholder'	=> 'New Password',
			'class'	=> 'form-control',
			));
		$data['form_confirm_new_password'] = form_password(array(
			'name'	=> 'confirm_new_password',
			'id'	=> 'confirm-new-password',
			'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
			'size' 	=> 30,
			'placeholder'	=> 'Confirm New Password',
			'class'	=> 'form-control',
			));
		$data['form_change_password_submit'] = form_submit(array(
			'id'	=> 'btn-change-password',
			'type'	=> 'submit',
			'name'	=> 'submit',
			'class'	=> 'btn btn-danger pull-right',
			'value'	=> 'Change password',
			'style'	=> 'margin-bottom:0;'
			));
		$data['form_change_password_close'] = form_close();

		//form attributes
		$data['form_change_email_open'] = form_open('profile/change_email', array(
			'id'	=> 'form-change-email',
			));
		$data['form_password'] = form_password(array(
			'name'	=> 'password',
			'id'	=> 'password',
			'size' 	=> 30,
			'placeholder'	=> 'Password',
			'class'	=> 'form-control',
			));
		$data['form_email'] = form_input(array(
			'name'	=> 'email',
			'id'	=> 'email',
			'value'	=> $this->input->post('email'),
			'maxlength'	=> 80,
			'size'	=> 30,
			'placeholder'	=> 'Email',
			'class'	=> 'form-control',
			));
		$data['form_change_email_submit'] = form_submit(array(
			'id'	=> 'btn-change-email',
			'type'	=> 'submit',
			'name'	=> 'submit',
			'class'	=> 'btn btn-danger pull-right',
			'value'	=> 'Send confirmation email',
			'style'	=> 'margin-bottom:0;'
			));
		$data['form_change_email_close'] = form_close();

		//external js
		$data['js_arr'] = array(
			'assets/js/profile.js',
			);

		//get user info
		$data['user'] = $this->tank_auth->get_user();
		$data['profile'] = $this->users->get_profile();
		$data['profile']['ava_url'] = $data['profile']['ava_url'] ? $data['profile']['ava_url'] : 'uploads/ava/no_ava.jpg';

		$this->smarty->view('profile/index', $data);
	}

	/**
	 * Change user password
	 *
	 * @return void
	 */
	function change_password() {
		if ($this->tank_auth->is_logged_in()) {
			//return result
			$result = array();

			if ($_POST) {
				//declare validation rules
				$validation_rules = array(
					array(
						'field'	=> 'old_password',
						'label'	=> 'Old Password',
						'rules' => 'trim|required|xss_clean',
						),
					array(
						'field'	=> 'new_password',
						'label'	=> 'New Password',
						'rules' => 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']',
						),
					array(
						'field'	=> 'confirm_new_password',
						'label'	=> 'Confirm new Password',
						'rules' => 'trim|required|xss_clean|matches[new_password]',
						),
					);

				//set validation rules
				$this->form_validation->set_rules($validation_rules);

				//validate
				if ($this->form_validation->run()) {								// validation ok
					if ($this->tank_auth->change_password($this->form_validation->set_value('old_password'), $this->form_validation->set_value('new_password'))) {	// success
						//$this->_show_message($this->lang->line('auth_message_password_changed'));
						$result['status'] = 1;
						$result['message'] = 'Your password has been successfully changed.';
					} else {														// fail
						$result['status'] = 0;

						$errors = $this->tank_auth->get_error_message();
						foreach ($errors as $k => $v) {
							$result['message'][$k] = $this->lang->line($v);
						}
					}
				} else {
					$result['status'] = 0;
					/*$result['message'] = array(
						'old_password'	=> form_error('old_password'),
						'new_password'	=> form_error('new_password'),
						'confirm_new_password'	=> form_error('confirm_new_password'),
						);*/
					$result['message'] = validation_errors();
				}//end validation
			} else {
				$result['status'] = 0;
				$result['message'] = 'Error.';
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'You are not logged in.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	/**
	 * Change user email
	 *
	 * @return void
	 */
	function change_email() {
		if ($this->tank_auth->is_logged_in()) {
			//return result
			$result = array();

			if ($_POST) {
				//declare validation rules
				$validation_rules = array(
					array(
						'field'	=> 'password',
						'label'	=> 'Password',
						'rules' => 'trim|required|xss_clean',
						),
					array(
						'field'	=> 'email',
						'label'	=> 'Email',
						'rules' => 'trim|required|xss_clean|valid_email',
						),
					);

				//set validation rules
				$this->form_validation->set_rules($validation_rules);

				//validate
				if ($this->form_validation->run()) {								// validation ok
					if (!is_null($data = $this->tank_auth->set_new_email($this->form_validation->set_value('email'), $this->form_validation->set_value('password')))) {	// success
						$data['site_name'] = $this->config->item('website_name', 'tank_auth');

						// Send email with new email address and its activation link
						$this->_send_email('change_email', $data['new_email'], $data);

						$result['status'] = 1;
						$result['message'] = 'A confirmation email has been sent to ' . $this->form_validation->set_value('email') . '. Follow the instructions in the email to complete this change of email address.';
					} else {														// fail
						$result['status'] = 0;

						$errors = $this->tank_auth->get_error_message();
						foreach ($errors as $k => $v) {
							$result['message'][$k] = $this->lang->line($v);
						}
					}
				} else {
					$result['status'] = 0;
					$result['message'] = validation_errors();
				}//end validation
			} else {
				$result['status'] = 0;
				$result['message'] = 'Error.';
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'You are not logged in.';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data) {
		$this->load->library('email');
		
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}

	/**
	 * Change ava
	 *
	 * @return void
	 */
	function change_ava() {
		if ($this->tank_auth->is_logged_in()) {
			//return result
			$result = array();

			$config1['upload_path'] = 'uploads/ava/';
			$config1['allowed_types'] = 'jpg|png';
			$config1['file_name'] = md5($this->tank_auth->get_user_id() . $this->tank_auth->get_username());
			$config1['overwrite'] = TRUE;
			$config1['max_size']	= '1024';
			$this->load->library('upload', $config1);

			//upload
			if ($this->upload->do_upload('ava')) {
				$uploaded_file = $this->upload->data();

				//resize ava
				$config2['image_library'] = 'gd2';
				$config2['source_image']	= 'uploads/ava/' . $uploaded_file['file_name'];
				$config2['create_thumb'] = FALSE;
				$config2['maintain_ratio'] = TRUE;
				$config2['width']	= 128;
				$config2['height']	= 128;
				$this->load->library('image_lib', $config2); 
				$this->image_lib->resize();

				//set session
				if ($this->users->update_profile(array('ava_url' => $config2['source_image']))) {
					$this->session->set_userdata(array(
						'ava'	=> $config2['source_image'],
						));

					$result['status'] = 1;
					$result['message'] = 'Changed avatar successfully.';
				} else {
					$result['status'] = 0;
					$result['message'] = 'Changed avatar unsuccessfully. Try again later.';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = $this->upload->display_errors();
			}
		} else {
			$result['status'] = 0;
			$result['message'] = 'You are not logged in.';
		}

		echo json_encode($result);
	}

}