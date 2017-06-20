<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->breadcrumbs->push('Dashboard', '/dashboard');
		$data = array(
			'title' => 'Home' ,
			'content' => 'dashboard/dashboard', 
			'breadcrumbs' => $this->breadcrumbs->show(),
		);
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			$data['user'] = $user;
			$this->load->view('layout/layout', $data);
		} 
		else
		{
			$this->load->view('layout/public_layout', $data);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */ 
/* Please DO NOT modify this information : */
/* This file generated by Andre Bhaskoro (+62 82 333 817 317) At : 2016-09-26 10:07:14 */
/* http://bhas.web.id */