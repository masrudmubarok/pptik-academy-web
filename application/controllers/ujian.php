<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Ujian_model');
    }

    public function index()
    {
        $param['main_content'] = 'ujian/list';
        $param['page_title'] = 'Exam';
        $param['ujian_list'] = $this->Ujian_model->getAllUjian();
        $this->load->view('template', $param);
    }

    public function edit_ujian($id_ujian)
    {
        $data['main_content'] = 'ujian/edit';
        $data['page_title'] = 'Edit Data Ujian';
        $data['ujian'] = $this->Ujian_model->getUjianId($id_ujian);
        $this->load->view('template', $data);
    }

    public function update()
    {
        $id_ujian = $this->input->post('id_ujian');
        $tanggal_daftar = $this->input->post('tanggal_daftar');
        $status_ujian = $this->input->post('status_ujian');
        $status_sertifikat = $this->input->post('status_sertifikat');
        $no_sertifikat = $this->input->post('no_sertifikat');
        if (empty($no_sertifikat)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Ujian/edit_ujian/' . $id_ujian);
        } else {
            $data = [
                'id_ujian' => $id_ujian,
                'tanggal_daftar' => $tanggal_daftar,
                'status_ujian' => $status_ujian,
                'status_sertifikat' => $status_sertifikat,
                'no_sertifikat' => $no_sertifikat,
            ];
            $this->Ujian_model->update($id_ujian, $data);
            // if ($reset == "on") {
            // 	$this->Siswa_model->reset($id_siswa);
            // }

            $this->session->set_flashdata('success_message', 'Data ujian berhasil diubah');
            redirect('Ujian');
        }
    }

    public function delete($id_ujian)
    {
        $this->Ujian_model->delete($id_ujian);
        $this->session->set_flashdata('success_message', 'Data pengambilan ujian siswa berhasil dihapus');
        redirect('Ujian');
    }
}
