<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembelian_model');
    }

    public function index()
    {
        $param['main_content'] = 'pembelian/list';
        $param['page_title'] = 'Pembelian Kursus';
        $param['pembelian_list'] = $this->Pembelian_model->getAllPembelian();
        $this->load->view('template', $param);
    }
}
