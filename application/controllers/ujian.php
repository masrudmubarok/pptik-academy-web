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
        $id_siswa = $this->input->post('id_siswa');
        $nama_siswa = $this->input->post('nama_siswa');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $kota = $this->input->post('kota');
        $negara = $this->input->post('negara');
        if (empty($nama_siswa) || empty($username) || empty($password)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Ujian/edit_swa/' . $id_siswa);
        } else {
            $data1 = [
                'id_siswa' => $id_siswa,
                'nama_siswa' => $nama_siswa,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'kota' => $kota,
                'negara' => $negara,
            ];
            $this->Siswa_model->update1($id_siswa, $data1);
            // if ($reset == "on") {
            // 	$this->Siswa_model->reset($id_siswa);
            // }

            $this->session->set_flashdata('success_message', 'Data siswa berhasil diubah');
            redirect('Ujian');
        }
    }

    public function delete($id_ujian)
    {
        $this->Ujian_model->delete($id_ujian);
        $this->session->set_flashdata('success_message', 'Data pengambilan ujian siswa berhasil dihapus');
        redirect('Ujian/detail');
    }
}
