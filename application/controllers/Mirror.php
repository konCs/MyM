<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mirror extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {	
		$this->load->model('mirror_model');
		$data['rain'] = $this->mirror_model->get_rain_data();
		
		$this->load->view('mirror', $data);
	}
	
	public function lala() {
		$this->load->view('welcome_message');
	}
}
