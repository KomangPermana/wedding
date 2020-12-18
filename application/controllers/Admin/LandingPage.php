<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
    }
    
	function index(){
        $vars['getView']    = "LandingPage";
		$vars['Title']		= "Landing Page Fitur";
		$vars['View']		= "Admin/LandingPage/Index";
		$this->load->view('Admin/_layout/index', $vars);
    }
}