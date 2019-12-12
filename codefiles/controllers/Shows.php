<?php

class Shows extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Diela';
		$data['shows'] = $this->shows_model->get_shows();

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Nazov', 'required');
		$this->form_validation->set_rules('type', 'Typ', 'required');
		$this->form_validation->set_rules('genre', 'Žáner', 'required');
		$this->form_validation->set_rules('text', 'Učinkujúci', 'required');

		if($this->form_validation->run() === False)
		{
			$data['title'] = 'Vytvorenie nového diela';

			$this->load->view('header');
			$this->load->view('create', $data);
			$this->load->view('footer');
		}
		else
		{
			$name =  $this->input->post('name');
			$type =  $this->input->post('type');
			$genre =  $this->input->post('genre');
			$text =  $this->input->post('text');

			$this->shows_model->create_show($name, $type, $genre, $text);

			redirect('shows/index');
		}
	}

	public function delete($id)
	{
		$this->shows_model->delete_show($id);
		redirect('shows/index');
	}

}
