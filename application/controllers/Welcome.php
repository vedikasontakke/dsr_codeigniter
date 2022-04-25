<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
  
	/*load database libray manually*/
	$this->load->database();
  
	/*load Model*/
	$this->load->model('Dsr_model');
	}

	public function index()
	{
		$this->load->view('main');
	}

	public function dsr_cs()
	{
		/*
		$this->load->model('Dsr_module');
        $master_cs = $this->Dsr_module->all();
        $data = array();
        $data['master_cs'] = $master_cs;
        */
	
		$result['data']=$this->Dsr_model->display_master_cs();
		$this->load->view('view_cs',$result);
		//$this->load->view('view_cs');
	}

	public function dept_dsr()
	{
		$this->load->view('dept_dsr');
		//$result['data']=$this->Dsr_model->get_comp_dsr();

	}
	public function dept_view()
	{
		$result['data']=$this->Dsr_model->get_comp_dsr();
		$this->load->view('dept_view' ,$result);
	}

	public function hostel_dsr()
	{
		$this->load->view('hostel_dsr');
	}

	public function library_dsr()
	{
		$this->load->view('library_dsr');
	}

	public function office_dsr()
	{
		$this->load->view('office_dsr');
	}

	public function dsr_cs_add()
	{
		$this->load->view('dsr_cs_add');
	}

	public function dsr_cs_distribute_view()
	{
		$result['data']=$this->Dsr_model->display_cs_distribution();
		$this->load->view('distribute_view' , $result);
	}

	public function dsr_cs_distribute_items()
	{
		$this->load->view('distribute_items');
	}

}
