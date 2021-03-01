<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

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
	public function index()
	{
		if ($this->session->userdata('isLogin')) {
			$param['main_content'] = 'dashboard';
			$param['page_title'] = 'Dashboard';
			// Data box
			$param['sum_kursus'] = $this->Dashboard_model->sum_kursus();
			$param['sum_tutor'] = $this->Dashboard_model->sum_tutor();
			$param['sum_siswa'] = $this->Dashboard_model->sum_siswa();
			$param['top'] = $this->Dashboard_model->top_kursus();
			$this->load->view('template', $param);
		} else {
			$this->load->view('login');
		}
	}
}
