<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderCtrl extends CI_Controller{
	
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('order_model');
	}
	public function index(){
		
		$data['data']=$this->order_model->fetchOrder();

		//Call to index page.
		$this->load->view('templates/header');
		$this->load->view('order/order_index',$data);
		$this->load->view('templates/footer');
	}
	public function create(){
		
		//Call to create page.
		$this->load->view('templates/header');
		$this->load->view('order/order_create');
		$this->load->view('templates/footer');
	}

	public function view($id=0){

		$data['data']=$this->order_model->viewOrder($id);
		//Call to view page.
		$this->load->view('templates/header');
		$this->load->view('order/order_view',$data);
		$this->load->view('templates/footer');
	}

	public function edit($id=0){

		$data['data']=$this->order_model->editOrder($id);
		//Call to edit page.
		$this->load->view('templates/header');
		$this->load->view('order/order_edit',$data);
		$this->load->view('templates/footer');

	}

	public function delete($id=0){

		$data['data']=$this->order_model->deleteOrder($id);
		//Call to delete page.
		$this->load->view('templates/header');
		$this->load->view('order/order_delete');
		$this->load->view('templates/footer');

	}

	
}
?>