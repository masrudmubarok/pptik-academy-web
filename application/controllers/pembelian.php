<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembelian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pembelian_model');
    }

    public function index()
    {
        $param['main_content'] = 'pembelian/list';
        $param['page_title'] = 'Pembelian Kursus';
        $param['pembelian_list'] = $this->pembelian_model->getAllPembelian();
        $this->load->view('template', $param);
    }
}
