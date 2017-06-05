<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestCtrl extends CI_Controller{
	
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('test_model');
	}
	public function index(){
		
		$data['data']=$this->test_model->fetch_from_db();

		//Call to index page.
		$this->load->view('templates/header');
		$this->load->view('test/test_index',$data);
		$this->load->view('templates/footer');
	}
	public function create(){
		
		//Call to create page.
		$this->load->view('templates/header');
		$this->load->view('test/test_create');
		$this->load->view('templates/footer');
	}

	public function insert(){
		if(isset($_POST)){
			$data=array(
					'user_id'=> $this->input->post('user_id'),
				    'name' => $this->input->post('name'),
				    'contact' => $this->input->post('contact'),
				    'DOB' => $this->input->post('DOB'),
				    'gender_id' => $this->input->post('gender_id'),
				    'aadhar_id' => $this->input->post('aadhar_id'),
				    'user_image' => $this->input->post('user_image'),
				    'state_id' => $this->input->post('state_id'),
				    'city_id' => $this->input->post('city_id'),
				    'address' => $this->input->post('address')
					); 

			echo $res = $this->chemistType_model->insert_to_db($data);
			if($res){
				header('location:'.base_url()."index.php/TestCtrl/".$this->index());
			}

		}
	}

	public function view($id=0){

		$data['data']=$this->chemistType_model->view_of_db($id);
		//Call to view page.
		$this->load->view('templates/header');
		$this->load->view('test/test_view',$data);
		$this->load->view('templates/footer');
	}

	public function edit($id=0){

		$data['data']=$this->chemistType_model->edit_to_db($id);
		//Call to edit page.
		$this->load->view('templates/header');
		$this->load->view('test/test_edit',$data);
		$this->load->view('templates/footer');

	}

	public function update(){
		if(isset($_POST)){
			$data=array(
					'user_id'=> $this->input->post('user_id'),
				    'name' => $this->input->post('name'),
				    'contact' => $this->input->post('contact'),
				    'DOB' => $this->input->post('DOB'),
				    'gender_id' => $this->input->post('gender_id'),
				    'aadhar_id' => $this->input->post('aadhar_id'),
				    'user_image' => $this->input->post('user_image'),
				    'state_id' => $this->input->post('state_id'),
				    'city_id' => $this->input->post('city_id'),
				    'address' => $this->input->post('address')
					);

			$id=$this->input->post('test_id');
			$res = $this->chemistType_model->update_to_db($data,$id);
			if($res){
				header('location:'.base_url()."index.php/TypeCtrl/".$this->index());
			}

		}
	}

	public function delete($id=0){

		$this->chemistType_model->delete_to_db($id);
		$this->index();

	}

	
}
?>