<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller 
{

	public function index()
	{
		$this->load->model('model_quote');
		$data['quotes'] = $this->model_quote->get_last_quotes();

		$this->load->view('layouts/view_top_layout');
		$this->load->view('view_home', $data);
		$this->load->view('layouts/view_bottom_layout');
	}

	public function top()
	{
		$this->load->view('layouts/view_top_layout');
		$this->load->view('view_top');
		$this->load->view('layouts/view_bottom_layout');		
	}

	public function random()
	{
		$this->load->model('model_quote');
		$count = $this->model_quote->count_quotes();
		$result = array();
		for ($i=0; $i < 5; $i++) { 
			$num = mt_rand(1, $count);
			array_push($result,$this->model_quote->get_quote($num));
		}
		$data['quotes'] = $result;
 		$this->load->view('layouts/view_top_layout');
		$this->load->view('view_random', $data);
		$this->load->view('layouts/view_bottom_layout');		
	}

	public function contact()
	{
		$this->load->view('layouts/view_top_layout');
		$this->load->view('view_contact');
		$this->load->view('layouts/view_bottom_layout');		
	}

	public function send()
	{
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		//$config['smtp_user']    = 'mygmail@gmail.com';
		$config['smtp_pass']    = '*******';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not     

		$this->email->initialize($config);
		$this->email->from($this->input->post('email'), 'User');
		$this->email->to('medynskyypavlo@gmail.com');
		$this->email->subject($this->input->post('heading'));
		$this->email->message($this->input->post('text'));
		$this->email->send();

		redirect('site','refresh');
	}
}
