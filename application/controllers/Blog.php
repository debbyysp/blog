<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('BlogModel');
    }

	public function index(){
		var_dump("tes");die;
		$this->load->view('blog/blog_home');
	}

	public function create(){

	}

	public function view(){
		
	}
}

?>