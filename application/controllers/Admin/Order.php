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
		$vars['Home']    		= $this->OrderModel->getHome($id);
		$vars['Couple']    		= $this->OrderModel->getCouple($id);
		$vars['Event']    		= $this->OrderModel->getEvent($id);
		$vars['Akad']    		= $this->OrderModel->getAkad($id);
		$vars['Resepsi']		= $this->OrderModel->getResepsi($id);
		$vars['Map']    		= $this->OrderModel->getMap($id);
		$vars['Gallery']    	= $this->OrderModel->getGallery($id);
		$vars['Quote']	    	= $this->OrderModel->getQuote($id);
		$vars['Story']	    	= $this->OrderModel->getStory($id);
		$vars['Bahasa'] 	   	= $this->OrderModel->getBahasa($id);
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