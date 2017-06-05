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
					'test_id'=> $this->input->post('test_id'),
				    'test_name' => $this->input->post('test_name'),
				    'test_date' => $this->input->post('test_date'),  
					); 

			echo $res = $this->test_model->insert_to_db($data);
			if($res){
				header('location:'.base_url()."index.php/TestCtrl/".$this->index());
			}

		}
	}

	public function view($id=0){

		$data['data']=$this->test_model->view_of_db($id);
		//Call to view page.
		$this->load->view('templates/header');
		$this->load->view('test/test_view',$data);
		$this->load->view('templates/footer');
	}

	public function edit($id=0){

		$data['data']=$this->test_model->edit_to_db($id);
		//Call to edit page.
		$this->load->view('templates/header');
		$this->load->view('test/test_edit',$data);
		$this->load->view('templates/footer');

	}

	public function update(){
		if(isset($_POST)){
			$data=array(
					'test_id'=> $this->input->post('test_id'),
				    'test_name' => $this->input->post('test_name'),
				    'test_date' => $this->input->post('test_date'), 
					);

			$id=$this->input->post('test_id');
			$res = $this->test_model->update_to_db($data,$id);
			if($res){
				header('location:'.base_url()."index.php/TestCtrl/".$this->index());
			}

		}
	}

	public function delete($id=0){

		$this->test_model->delete_to_db($id);
		$this->index();

	}

	
}
?>