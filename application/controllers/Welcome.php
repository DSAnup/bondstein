<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Rest_model');
	}

	public function index()
	{
		$data['contact'] = $this->Rest_model->SelectDataOrder('contact', '*', '','id','desc');
		$this->load->view('index', $data);
	}

	public function add_contact($id = NULL){
		if(isset($id)){
			$data['edit'] = $this->Rest_model->SelectData_1('contact', '*', array('id'=>$id));
			$this->load->view('add_contact', $data);
		}else{
			$this->load->view('add_contact');
		}
	}
	
	public function submit_contact(){
		$data = $this->input->post();
		$id = $this->input->post('id');
		if(isset($id)){
			$this->Rest_model->UpdateData('contact', $data, array('id'=>$id));
		}else{
			$this->Rest_model->SaveData('contact', $data);
		}
		redirect(base_url(), 'refresh');
	}
	public function delete_contact($id){
		$this->Rest_model->DeleteData('contact', array('id'=>$id));
		redirect(base_url(), 'refresh');
	}
	public function address_list($id)
	{
		$data['con'] = $this->Rest_model->SelectData_1('contact', '*', array('id'=>$id));
		$data['address'] = $this->Rest_model->SelectDataOrder('address', '*', array('contact_id'=>$id),'id','desc');
		$this->load->view('address_list', $data);
	}
	public function add_address($coid, $id = NULL){
		$data['con'] = $this->Rest_model->SelectData_1('contact', '*', array('id'=>$coid));
		if(isset($id)){
			$data['edit'] = $this->Rest_model->SelectData_1('address', '*', array('id'=>$id));
			$this->load->view('add_address', $data);
		}else{
			$this->load->view('add_address', $data);
		}
	}
	public function submit_address(){
		$data = $this->input->post();
		$id = $this->input->post('id');
		$coid = $this->input->post('contact_id');
		if(isset($id)){
			$this->Rest_model->UpdateData('address', $data, array('id'=>$id));
		}else{
			$this->Rest_model->SaveData('address', $data);
		}
		redirect(base_url().'Welcome/address_list/'.$coid, 'refresh');
	}
	public function delete_address($coid, $id){
		$this->Rest_model->DeleteData('address', array('id'=>$id));
		redirect(base_url().'Welcome/address_list/'.$coid, 'refresh');
	}
	public function phone_list($id)
	{
		$data['con'] = $this->Rest_model->SelectData_1('contact', '*', array('id'=>$id));
		$data['phone'] = $this->Rest_model->SelectDataOrder('phone', '*', array('contact_id'=>$id),'id','desc');
		$this->load->view('phone_list', $data);
	}
	public function add_phone($coid, $id = NULL){
		$data['con'] = $this->Rest_model->SelectData_1('contact', '*', array('id'=>$coid));
		if(isset($id)){
			$data['edit'] = $this->Rest_model->SelectData_1('phone', '*', array('id'=>$id));
			$this->load->view('add_phone', $data);
		}else{
			$this->load->view('add_phone', $data);
		}
	}
	public function submit_phone(){
		$data = $this->input->post();
		$id = $this->input->post('id');
		$coid = $this->input->post('contact_id');
		if(isset($id)){
			$this->Rest_model->UpdateData('phone', $data, array('id'=>$id));
		}else{
			$this->Rest_model->SaveData('phone', $data);
		}
		redirect(base_url().'Welcome/phone_list/'.$coid, 'refresh');
	}
	public function delete_phone($coid, $id){
		$this->Rest_model->DeleteData('phone', array('id'=>$id));
		redirect(base_url().'Welcome/phone_list/'.$coid, 'refresh');
	}

}
