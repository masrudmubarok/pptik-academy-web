<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tutor_model');
    }

    public function index()
    {
        $param['main_content'] = 'tutor/list';
        $param['page_title'] = 'Tutors';
        $param['ttr_list'] = $this->Tutor_model->getAllTtr();
        $this->load->view('template', $param);
    }

    public function add_ttr()
    {
        $param['main_content'] = 'ttr/add';
        $param['page_title'] = 'Tambah Tutor';
        $this->load->view('template', $param);
    }

    public function create()
    {
        $nama_tutor = $this->input->post('nama_tutor');
        $keahlian = $this->input->post('keahlian');
        if (empty($nama_tutor) || empty($keahlian)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Tutor/add_ttr');
        } else {
            $data = [
                'nama_tutor' => $nama_tutor,
                'keahlian' => $keahlian,
            ];
            $cek = $this->Tutor_model->insert($data);
            if ($cek) {
                $this->session->set_flashdata('success_message', 'Data tutor berhasil ditambahkan');
                redirect('Tutor');
            } else {
                $this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
                redirect('Tutor/add_ttr');
            }
        }
    }

    public function edit_ttr($id_tutor)
    {
        $data['main_content'] = 'tutor/edit';
        $data['page_title'] = 'Edit Data Tutor';
        $data['ttr'] = $this->Tutor_model->getTtr($id_tutor);
        $this->load->view('template', $data);
    }

    public function update()
    {
        $nama_tutor = $this->input->post('nama_tutor');
        $keahlian = $this->input->post('keahlian');
        if (empty($nama_tutor) || empty($keahlian)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Tutor/edit_trs/' . $id_tutor);
        } else {
            $data = [
                'nama_tutor' => $nama_tutor,
                'keahlian' => $keahlian,
            ];
            $this->Tutor_model->update($id_tutor, $data);
            if ($reset == "on") {
                $this->Transaksi_model->reset($id_tutor);
            }

            $this->session->set_flashdata('success_message', 'Data tutor berhasil diubah');
            redirect('Tutor');
        }
    }

    public function delete($id_tutor)
    {
        $this->Tutor_model->delete($id_tutor);
        $this->session->set_flashdata('success_message', 'Data tutor berhasil dihapus');
        redirect('Tutor');
    }
}
