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
        $vars['getView']    = "LandingPage";
		$vars['Title']		= "Landing Page Fitur";
		$vars['View']		= "Admin/LandingPage/Index";
		$this->load->view('Admin/_layout/index', $vars);
	}
	
	function getPromo(){
		$result = $this->LandingPageModel->getPromo();
		print_r(json_encode($result));
	}

	function insertPromo(){
		$this->LandingPageModel->insertPromo();
		$this->getPromo();
	}
}