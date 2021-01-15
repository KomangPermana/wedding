<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/OrderModel');
    }

	function index()
	{
		$name = $this->uri->segment('1');
		$id = getDataByNamePengantin('master_pengantin',$name);
		if ($id != null || $id != ""){
			$vars['Agama']    		= $this->OrderModel->getAgama($id->Id);
			$vars['Home']    		= $this->OrderModel->getHome($id->Id);
			$vars['Couple']    		= $this->OrderModel->getCouple($id->Id);
			$vars['Event']    		= $this->OrderModel->getEvent($id->Id);
			$vars['Akad']    		= $this->OrderModel->getAkad($id->Id);
			$vars['Resepsi']		= $this->OrderModel->getResepsi($id->Id);
			$vars['Map']    		= $this->OrderModel->getMap($id->Id);
			$vars['Gallery']    	= $this->OrderModel->getGallery($id->Id);
			$vars['FotoGallery']    = $this->OrderModel->getFotoGallery($id->Id);
			$this->load->view('Template/Home', $vars);
		} else {
			$this->load->view('Home');	
		}
		
	}

	function dashboard()
	{
		$this->load->view('Home');
	}
}
