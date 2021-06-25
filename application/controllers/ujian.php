<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ujian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ujian_model');
    }

    public function index()
    {
        $param['main_content'] = 'ujian/list';
        $param['page_title'] = 'Ujian';
        $param['ujian_list'] = $this->ujian_model->getAllUjian();
        $this->load->view('template', $param);
    }

    public function edit_ujian($id_ujian)
    {
        $data['main_content'] = 'ujian/edit';
        $data['page_title'] = 'Edit Data Ujian';
        $data['ujian'] = $this->ujian_model->getUjianId($id_ujian);
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
            redirect('ujian/edit_ujian/' . $id_ujian);
        } else {
            $data = [
                'id_ujian' => $id_ujian,
                'tanggal_daftar' => $tanggal_daftar,
                'status_ujian' => $status_ujian,
                'status_sertifikat' => $status_sertifikat,
                'no_sertifikat' => $no_sertifikat,
            ];
            $this->ujian_model->update($id_ujian, $data);
            // if ($reset == "on") {
            // 	$this->Siswa_model->reset($id_siswa);
            // }

            $this->session->set_flashdata('success_message', 'Data ujian berhasil diubah');
            redirect('ujian');
        }
    }

    public function delete($id_ujian)
    {
        $this->ujian_model->delete($id_ujian);
        $this->session->set_flashdata('success_message', 'Data pengambilan ujian siswa berhasil dihapus');
        redirect('ujian');
    }
}
