<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/AccountModel');
    }
    
	public function index(){
		$vars['Title']		= "Dashboard Admin";
		$vars['View']		= "Admin/Home/Index";
		$this->load->view('Admin/_layout/index', $vars);
    }
}