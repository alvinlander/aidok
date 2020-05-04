<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class User extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_user');
	}

	public function index(){
		$data['title'] = 'Aidok | Data User';
		$data['u'] = $this->model_user->get_user();
		$this->load->view('header_page_admin',$data);
		$this->load->view('admin/v_datauser',$data);
		$this->load->view('footer_page');
	}
}