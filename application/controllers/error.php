<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class error extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function error_404() 
    { 
        $data['title'] = "PAGE NOT FOUND";
        $data['content'] = 'We Couldn’t Find This Page';

        $this->smarty->page('error/error_404', $data);
    }

    public function error_500() 
    { 
        $data['title'] = "OOOPS!!!";
        $data['content'] = 'Something Went Wrong';

        $this->smarty->page('error/error_500', $data);
    }

}