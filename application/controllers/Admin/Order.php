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
		$vars['Data']    	= $this->OrderModel->getDataMaster();
        $vars['getView']    = "Order";
		$vars['Title']		= "Data Pemesanan";
		$vars['View']		= "Admin/Order/Pesan";
		$this->load->view('Admin/_layout/index', $vars);
	}

	function insertLink(){
		$this->OrderModel->insertData();
		redirect(base_url('Admin/Order/'));
	}

	function updateLink(){
		$this->OrderModel->updateData();
		redirect(base_url('Admin/Order/'));
	}

	function NonactiveLink(){
		$this->OrderModel->nonactiveLink();
		redirect(base_url('Admin/Order/'));
	}

	function Duplicate(){
		$this->OrderModel->duplicateMaster();
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
		$vars['FotoGallery']    = $this->OrderModel->getFotoGallery($id);
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
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Agama'));
	}

	function insertHome(){
		$this->OrderModel->insertHome();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Home'));
	}

	function insertCouple(){
		$this->OrderModel->insertCouple();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Couple'));
	}

	function insertEvent(){
		$this->OrderModel->insertEvent();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Event'));
	}

	function insertAkad(){
		$this->OrderModel->insertAkad();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Event'));
	}

	function insertResepsi(){
		$this->OrderModel->insertResepsi();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Event'));
	}

	function insertMap(){
		$this->OrderModel->insertMap();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Event'));
	}

	function insertGallery(){
		$this->OrderModel->insertGallery();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Galeri'));
	}

	function insertFotoGallery(){
		$this->OrderModel->insertFotoGallery();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Galeri'));
	}

	function insertQuote(){
		$this->OrderModel->insertQuote();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Quote'));
	}

	function insertStory(){
		$this->OrderModel->insertStory();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Quote'));
	}

	function insertBahasa(){
		$this->OrderModel->insertBahasa();
		redirect(base_url('Admin/Order/Edit/'.$this->uri->segment('4').'/Bahasa'));
	}
}