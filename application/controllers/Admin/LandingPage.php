<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/LandingPageModel');
    }
    
	function index(){
		$vars['Promo']		= $this->LandingPageModel->getPromo();
		$vars['Phone']		= $this->LandingPageModel->getPhone();
		$vars['Email']		= $this->LandingPageModel->getEmail();
        $vars['getView']    = "LandingPage";
		$vars['Title']		= "Landing Page Fitur";
		$vars['View']		= "Admin/LandingPage/Index";
		$this->load->view('Admin/_layout/index', $vars);
	}
	
	function getPromo(){
		$result = $this->LandingPageModel->getPromo();
		print_r(json_encode($result));
	}

	function getPhone(){
		$result = $this->LandingPageModel->getPhone();
		print_r(json_encode($result));
	}

	function getEmail(){
		$result = $this->LandingPageModel->getEmail();
		print_r(json_encode($result));
	}

	function insertData(){
		$data   = $this->input->post('data');
        $type   = $this->input->post('type');
        $table  = $this->input->post('table');
		$this->LandingPageModel->insertData($data,$type,$table);

		if ($table == "Promo"){
			$this->getPromo();
		}else if ($table == "Phone"){
			$this->getPhone();
		} else if ($table == "Email"){
			$this->getEmail();
		}
	}
}