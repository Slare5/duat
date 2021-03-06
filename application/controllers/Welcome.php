<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$this->load->library('user_agent');
		$data = array(
			'logo' => site_url('assets/img/eyes.png'),
			'title' => 'Duauth Autenticador Inteligente',
			'styles' => array(
				site_url('assets/css/main.css')
			),
			'ua' => array(
				'browser' => $this->agent->browser(),
				'version' => $this->agent->version(),
				'platform' => $this->agent->platform()
			)
		);
		$this->load->view('head', $data);
		$this->load->view('landing/navbar');
		$this->load->view('landing/landing');
		$this->load->view('footer');
		$this->load->view('tail');
	}

	public function privacy()
	{
		$data = array(
			'logo' => site_url('assets/img/eyes.png'),
			'title' => 'Duauth Autenticador Inteligente',
			'styles' => array(
				site_url('assets/css/main.css')
			)
		);
		$this->load->view('head', $data);
		$this->load->view('landing/navbar');
		$this->load->view('landing/privacy');
		$this->load->view('footer');
		$this->load->view('tail');
	}
}
