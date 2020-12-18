<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller 
{
    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/OrderModel');
    }

    function index(){
		$vars['Data']    	= $this->OrderModel->getMaster();
        $vars['getView']    = "Order";
		$vars['Title']		= "Data Pemesanan";
		$vars['View']		= "Admin/Order/Pesan";
		$this->load->view('Admin/_layout/index', $vars);
	}

	function insertLink(){
		$this->OrderModel->insertData();
		redirect(base_url('Admin/Order/'));
	}
	
	function Edit(){
		$id = $this->uri->segment('4');
		$vars['Pasangan']    	= getDataByIdPengantin('master_pengantin',$id);
		$vars['Agama']    		= $this->OrderModel->getAgama($id);
		//$vars['Home']    		= $this->OrderModel->getHome($id);
        $vars['getView']    = "Order";
		$vars['Title']		= "Form Edit";
		$vars['View']		= "Admin/Order/Index";
		$this->load->view('Admin/_layout/index', $vars);
	}
	
	function insertAgama(){
		$this->OrderModel->insertAgama();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4')));
	}
}