<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{


	public function register()
	{
		$hashed_pass = md5($this->input->post('password'));

		$this->load->model('model_user');
		$user = array('name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'password'=>$hashed_pass);
		$this->model_user->save($user);

		redirect('site', 'refresh');
	}

	public function  login()
	{
		$hashed_pass = md5($this->input->post('password'));

		$this->load->model('model_user');

		$password = $this->input->post('password');
		$email = $this->input->post('email');
		if ($this->model_user->check($password,$email)) {
			echo"sweat";
			exit();
		 	redirect('site', 'refresh');
		} else {
		 	echo 'wrong';
		 	exit();
		}	 
	}
}