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
        $param['page_title'] = 'Purchase';
        $param['pembelian_list'] = $this->Pembelian_model->getAllPembelian();
        $this->load->view('template', $param);
    }

    public function edit_pembelian($id_ambilkursus)
    {
        $data['main_content'] = 'pembelian/edit';
        $data['page_title'] = 'Edit Data Pembelian';
        $data['beli'] = $this->Pembelian_model->getPembelianId($id_ambilkursus);
        $this->load->view('template', $data);
    }

    public function update()
    {
        $id_ambilkursus = $this->input->post('id_ambilkursus');
        $gross_amount = $this->input->post('gross_amount');
        $transaction_time = $this->input->post('transaction_time');
        $transaction_status = $this->input->post('transaction_status');
        if (empty($gross_amount)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Pembelian/edit_pembelian/' . $id_ambilkursus);
        } else {
            $data = [
                'id_ambilkursus' => $id_ambilkursus,
                'gross_amount' => $gross_amount,
                'transaction_time' => $transaction_time,
                'transaction_status' => $transaction_status,
            ];
            $this->Pembelian_model->update($id_ambilkursus, $data);
            // if ($reset == "on") {
            // 	$this->Siswa_model->reset($id_siswa);
            // }

            $this->session->set_flashdata('success_message', 'Data pembelian kursus berhasil diubah');
            redirect('Pembelian');
        }
    }

    public function delete($id_ambilkursus)
    {
        $this->Pembelian_model->delete($id_ambilkursus);
        $this->session->set_flashdata('success_message', 'Data pengambilan kursus siswa berhasil dihapus');
        redirect('Pembelian');
    }
}
