<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller 
{
	public function create()
	{
		$this->load->view('layouts/view_top_layout');
		$this->load->view('quotes/view_create');
		$this->load->view('layouts/view_bottom_layout');
	}

	public function add()
	{
		$this->load->model('model_quote');
		$quote = array(	'users_user_id' => 1,
						'content' => $this->input->post('content'),
						'author' => $this->input->post('author'));
		$this->model_quote->save($quote);

		redirect('site', 'refresh');
	}

}