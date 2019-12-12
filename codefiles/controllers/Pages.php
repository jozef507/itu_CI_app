<?php

class Pages extends CI_Controller
{
	public function home()
	{
		$data['title'] = 'Domov';
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function about()
	{
		$data['title'] = 'O nás';
		$this->load->view('header');
		$this->load->view('about', $data);
		$this->load->view('footer');
	}
}
