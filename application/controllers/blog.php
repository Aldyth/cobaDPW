<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'terserah';
		$data['heading'] = 'terserah';
		$data['entry'] = 'terserah';
		$this->load->view('view_blog',$data);
	}
	
	public function register ()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('view_register');
		}
		else 
		{
			$this->confirmation();
		}
		
	}
	
	public function confirmation ()
	{
		$data['username'] = $this->input->post('username');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['password'] = $this->input->post('password');
		
		$this->load->view('view_confirmation', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */