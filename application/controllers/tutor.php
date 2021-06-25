<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tutor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('tutor_model');
    }

    public function index()
    {
        $param['main_content'] = 'tutor/list';
        $param['page_title'] = 'Tutor';
        $param['ttr_list'] = $this->tutor_model->getAllTtr();
        $this->load->view('template', $param);
    }

    public function add_ttr()
    {
        $param['main_content'] = 'tutor/add';
        $param['page_title'] = 'Tambah Tutor';
        $this->load->view('template', $param);
    }

    public function create()
    {
        $nama_tutor = $this->input->post('nama_tutor');
        $keahlian = $this->input->post('keahlian');
        if (empty($nama_tutor) || empty($keahlian)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('tutor/add_ttr');
        } else {
            $data = [
                'nama_tutor' => $nama_tutor,
                'keahlian' => $keahlian,
            ];
            $cek = $this->tutor_model->insert($data);
            if ($cek) {
                $this->session->set_flashdata('success_message', 'Data tutor berhasil ditambahkan');
                redirect('tutor');
            } else {
                $this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
                redirect('tutor/add_ttr');
            }
        }
    }

    public function edit_ttr($id_tutor)
    {
        $data['main_content'] = 'tutor/edit';
        $data['page_title'] = 'Edit Data Tutor';
        $data['ttr'] = $this->tutor_model->getTtr($id_tutor);
        $this->load->view('template', $data);
    }

    public function update()
    {
        $id_tutor = $this->input->post('id_tutor');
        $nama_tutor = $this->input->post('nama_tutor');
        $keahlian = $this->input->post('keahlian');
        if (empty($nama_tutor) || empty($keahlian)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('tutor/edit_ttr/' . $id_tutor);
        } else {
            $data = [
                'nama_tutor' => $nama_tutor,
                'keahlian' => $keahlian,
            ];
            $this->tutor_model->update($id_tutor, $data);
            $this->session->set_flashdata('success_message', 'Data tutor berhasil diubah');
            redirect('tutor');
        }
    }

    public function delete($id_tutor)
    {
        $this->tutor_model->delete($id_tutor);
        $this->session->set_flashdata('success_message', 'Data tutor berhasil dihapus');
        redirect('tutor');
    }
}
