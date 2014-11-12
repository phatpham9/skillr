<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class browse extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->load->model(array(
			'skill_model',
			'tank_auth/users',
			));

		if (!$this->tank_auth->is_logged_in()) {
			$this->smarty->assign('is_logged_in', 0);
			$this->smarty->assign('ava_url', 'uploads/ava/no_ava.jpg');
		} else {
			$this->smarty->assign('is_logged_in', 1);
			$this->smarty->assign('username', $this->session->userdata('username'));
			$this->smarty->assign('ava_url', $this->session->userdata('ava') ? $this->session->userdata('ava') : 'uploads/ava/no_ava.jpg');
		}

		$this->smarty->assign('nav_active', 'browse');
	}

	function index() {
		//get skills list
		$data['skills_list'] = $this->skill_model->get_all_skills();
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
					} else if ($now == $end_date) {
						$data['skills_list'][$index]['time_to_go'] = 'Deadline today';
					} else if ($end_date < $now) {
						$time_delayed = strtolower(timespan(mysql_to_unix($end_date), mysql_to_unix($now)));
						$data['skills_list'][$index]['time_delayed'] = $time_delayed . ' delayed';
					}
				}
			}
		}

		$data['recent_done'] = $this->skill_model->get_recent_done(10);
		if ($data['recent_done']) {
			foreach ($data['recent_done'] as $index=>$skill) {
				$user = $this->users->get_user_by_id($skill['user_id'], 1);
				$data['recent_done'][$index]['user'] = $user->username;
			}
		}

		$this->smarty->view('browse/index', $data);
	}

}