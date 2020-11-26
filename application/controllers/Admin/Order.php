<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller 
{
    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/AccountModel');
    }

    function index(){
        $vars['getView']    = "Order";
		$vars['Title']		= "Form Pemesanan";
		$vars['View']		= "Admin/Order/Index";
		$this->load->view('Admin/_layout/index', $vars);
    }
}