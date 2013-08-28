<?php

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function HelloWorld(){
    	//$this->load->view('view');
    		$this->load->model('model');
    		$data['result'] = $this->model->get_ars();
    		$this->load->view('view',$data);
    }
}

?>