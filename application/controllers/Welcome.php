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
/*
	public function index() { 
		$this->load->view('upload_form', array('error' => ' ' )); 
	 }
	 public function do_upload() { 
		$config['upload_path']   = './uploads/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 1024; 
		$config['max_width']     = 1024; 
		$config['max_height']    = 1200;  
		$this->load->library('upload', $config);
		   
		if ( ! $this->upload->do_upload('userfile')) {
		   $error = array('error' => $this->upload->display_errors()); 
		   $this->load->view('upload_form', $error); 
		}
		   
		else { 
		   $data = array('upload_data' => $this->upload->data());
		   echo "File uploaded Successfully!";
		} 
   } 
*/	
	public function index()
	{
		$this->load->view('main');
	}

	public function dsr_cs()
	{
		$result['data']=$this->Dsr_model->display_master_cs();
		$this->load->view('view_cs',$result);
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
		//$this->load->view('dsr_cs_add');

		$this->load->model('Dsr_model');
        $this->form_validation->set_rules('Oraganization_ID','Oraganization ID','required|alpha_numeric');
        $this->form_validation->set_rules('DSR_no','DSR No.','required|integer');
        $this->form_validation->set_rules('Product_ID','Product ID','required|is_unique[master_cs.Product_ID]|integer');
        $this->form_validation->set_rules('purchase_date','purchase date','required');
        $this->form_validation->set_rules('purchase_authority','Choose Authority','required');
        $this->form_validation->set_rules('supplier_name','Supplier Name','required');
        $this->form_validation->set_rules('Supplier_Address','Supplier Address','required');
        $this->form_validation->set_rules('product_name','Product Name','required');
        $this->form_validation->set_rules('product_desc','Product Description','required');
        $this->form_validation->set_rules('qty','Quantity','required|integer');
        $this->form_validation->set_rules('Price_Per_Quantity','Price Per Quantity','required|numeric');
        $this->form_validation->set_rules('price','Total Price','required|numeric');
        $this->form_validation->set_rules('initial_HOD','Purchase Authority','required');
        $this->form_validation->set_rules('Quantity_Distributed','Quantity Distributed','required|integer');
        $this->form_validation->set_rules('stamp_sign_cs','Stamp / Sign of Central Store:','required|is_unique[master_cs.stamp_sign_cs]');
        $this->form_validation->set_rules('qty_remaining','Quantity Remaining','required|integer');
        $this->form_validation->set_rules('bill_pic','Bill Photo','required|is_unique[master_cs.bill_pic]');
        $this->form_validation->set_rules('dsr_pic','DSR Photo','required|is_unique[master_cs.dsr_pic]');
        if($this->form_validation->run() == false){
            $this->load->view('dsr_cs_add');
        }
        else{

		if($this->input->post('submit'))
		{
			 $data['Oraganization_ID'] = $this->input->post('Oraganization_ID');
			 $data['DSR_no'] = $this->input->post('DSR_no');
			 $data['Product_ID'] = $this->input->post('Product_ID');
			 $data['purchase_date'] = date('dd-mm-yyyy');
			 $data['purchase_authority'] = $this->input->post('purchase_authority');
			 $data['supplier_name'] = $this->input->post('supplier_name');
			 $data['Supplier_Address'] = $this->input->post('Supplier_Address');
			 $data['product_name'] = $this->input->post('product_name');
			 $data['product_desc'] = $this->input->post('product_desc');
			 $data['qty'] = $this->input->post('qty');
			 $data['Price_Per_Quantity'] = $this->input->post('Price_Per_Quantity');
			 $data['price'] = $this->input->post('price');
			 $data['initial_HOD'] = $this->input->post('initial_HOD');
			 $data['Quantity_Distributed'] = $this->input->post('Quantity_Distributed');
			 $data['stamp_sign_cs'] = $this->input->post('stamp_sign_cs');
			 $data['qty_remaining'] = $this->input->post('qty_remaining');
			 $data['remarks'] = $this->input->post('remarks');
			 $data['bill_pic'] = $this->input->post('bill_pic');
			 $data['dsr_pic'] = $this->input->post('dsr_pic');
			$response=$this->Dsr_model->add_cs($data);
			if($response==true){
			        echo "Records Saved Successfully";
					redirect(base_url().'index.php/Welcome/dsr_cs');

			}
			else{
					echo "Insert error !";
			}
		}
	}
	}

	public function dsr_cs_distribute_view()
	{
		$result['data']=$this->Dsr_model->display_cs_distribution();
		$this->load->view('distribute_view' , $result);
	}

	public function dsr_cs_distribute_items()
	{
		//$this->load->view('distribute_items');
		$this->load->model('Dsr_model');

        $this -> form_validation -> set_rules('qty_distributed' ,'Quantity Distributed' ,'required|integer');
		$this -> form_validation -> set_rules('qty_remaining' ,'Quantity Remaining' ,'required|integer');
        $this -> form_validation -> set_rules('date_distributed' ,'Date Distributed' ,'required');
		$this -> form_validation -> set_rules('head_initials' ,'Head Initials' ,'required');
        $this -> form_validation -> set_rules('stamp_of_initials' ,'Stamp Of Initials' ,'required|is_unique[cs_distribution.stamp_of_initials]');

        if($this->form_validation->run() == false)
		{
            $this->load->view('distribute_items');
        }else
		{
	     	if($this->input->post('submit'))
		  {
		    $data['Product_ID']=$this->input->post('Product_ID');
			$data['qty_distributed']=$this->input->post('qty_distributed');
			$data['qty_remaining']=$this->input->post('qty_remaining');
			$data['date_distributed']=$this->input->post('date_distributed');
			$data['head_initials']=$this->input->post('head_initials');
			$data['stamp_of_initials']=$this->input->post('stamp_of_initials');

			$response=$this->Dsr_model->dsr_cs_distribute_items($data);
			if($response==true){
				
			        echo "Records Saved Successfully";
					redirect(base_url().'index.php/Welcome/dsr_cs_distribute_view');

			}
			else{
					echo "Insert error !";
			}
		  }
	    }
	}

	public function notification()
	{
		$result['data']=$this->Dsr_model->view_notification();
		$this->load->view('notification',$result);
	}

}