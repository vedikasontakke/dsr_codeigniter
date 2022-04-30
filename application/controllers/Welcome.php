<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$result['data']=$this->Dsr_model->display_master_cs();
		$this->load->view('view_cs',$result);
		//$this->load->view('view_cs');
	}

	public function dept_dsr()
	{
		$this->load->view('dept_dsr');
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
		$this->load->model('Dsr_model');

		$this->form_validation->set_rules('Oraganization_ID','Oraganization ID','required');
        $this->form_validation->set_rules('DSR_no','DSR_No.','required');
        $this->form_validation->set_rules('Product_ID','Product ID','required');
        $this->form_validation->set_rules('purchase_date','dd-mm-yyyy','required');
        $this->form_validation->set_rules('purchase_authority','Choose Authority','required');
        $this->form_validation->set_rules('supplier_name','Supplier Name','required');
        $this->form_validation->set_rules('Supplier_Address','Supplier Address','required');
        $this->form_validation->set_rules('product_name','Product Name','required');
        $this->form_validation->set_rules('product_desc','Product Description','required');
        $this->form_validation->set_rules('qty','Quantity','required');
        $this->form_validation->set_rules('Price_Per_Quantity','Price Per Quantity','required');
        $this->form_validation->set_rules('price','Total Price','required');
        $this->form_validation->set_rules('initial_HOD','Purchase Authority','required');
        $this->form_validation->set_rules('Quantity_Distributed','Quantity Distributed','required');
        $this->form_validation->set_rules('stamp_sign_cs','Stamp / Sign of Central Store:','required');
        $this->form_validation->set_rules('qty_remaining','Quantity Remaining','required');
        $this->form_validation->set_rules('remarks','Remarks');
        $this->form_validation->set_rules('bill_pic','Bill Photo','required');
        $this->form_validation->set_rules('dsr_pic','DSR Photo');
        if($this->form_validation->run() == false){

            $this->load->view('dsr_cs_add');

        }else{
            ///save record to database 

          //save record to database
		  $formArray = array();
		  $formArray['Oraganization_ID'] = $this->input->post('Oraganization_ID');
		  $formArray['DSR_no'] = $this->input->post('DSR_no');
		  $formArray['Product_ID'] = $this->input->post('Product_ID');
		  $formArray['purchase_date'] = date('dd-mm-yyyy');
		  $formArray['purchase_authority'] = $this->input->post('purchase_authority');
		  $formArray['supplier_name'] = $this->input->post('supplier_name');
		  $formArray['Supplier_Address'] = $this->input->post('Supplier_Address');
		  $formArray['product_name'] = $this->input->post('product_name');
		  $formArray['product_desc'] = $this->input->post('product_desc');
		  $formArray['qty'] = $this->input->post('qty');
		  $formArray['Price_Per_Quantity'] = $this->input->post('Price_Per_Quantity');
		  $formArray['price'] = $this->input->post('price');
		  $formArray['initial_HOD'] = $this->input->post('initial_HOD');
		  $formArray['Quantity_Distributed'] = $this->input->post('Quantity_Distributed');
		  $formArray['stamp_sign_cs'] = $this->input->post('stamp_sign_cs');
		  $formArray['qty_remaining'] = $this->input->post('qty_remaining');
		  $formArray['remarks'] = $this->input->post('remarks');
		  $formArray['bill_pic'] = $this->input->post('bill_pic');
		  $formArray['dsr_pic'] = $this->input->post('dsr_pic');
		  
            $this->Dsr_model->add_cs($formArray);
            $this->session->set_flashdata('success','Record added successfully!');
            redirect(base_url().'index.php/Welcome/dsr_cs');
        }
		   
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
