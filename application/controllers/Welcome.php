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
	public function index()
	{
		$this->load->view('main');
	}

	public function dsr_cs()
	{
		$this->load->view('view_cs');
	}

	public function dept_dsr()
	{
		$this->load->view('dept_dsr');
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
		$this->load->view('distribute_view');
	}

	public function dsr_cs_distribute_items()
	{
		$this->load->view('distribute_items');
	}

	public function dept_view()
	{
		$this->load->view('dept_view');
	}
}
