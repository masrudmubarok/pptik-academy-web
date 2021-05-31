<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $param['main_content'] = 'berita/list';
        $param['page_title'] = 'Berita';
        $param['berita_list'] = $this->Berita_model->getAllBerita();
        $this->load->view('template', $param);
    }

    public function add_berita()
    {
        $param['main_content'] = 'berita/add';
        $param['page_title'] = 'Tambah Berita';
        $this->load->view('template', $param);
    }

    public function create()
    {
        $keterangan = $this->input->post('keterangan');
        $tanggal_berita = $this->input->post('tanggal_berita');
        $link_berita = $this->input->post('link_berita');
        if (empty($keterangan) || empty($tanggal_berita)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Berita/add_berita');
        } else {
            $data = [
                'keterangan' => $keterangan,
                'tanggal_berita' => $tanggal_berita,
                'link_berita' => $link_berita,
            ];
            $cek = $this->Berita_model->insert($data);
            if ($cek) {
                $this->session->set_flashdata('success_message', 'Data berita berhasil ditambahkan');
                redirect('Berita');
            } else {
                $this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
                redirect('Berita/add_berita');
            }
        }
    }

    public function edit_berita($id_berita)
    {
        $data['main_content'] = 'berita/edit';
        $data['page_title'] = 'Edit Data Berita';
        $data['berita'] = $this->Berita_model->getBerita($id_berita);
        $this->load->view('template', $data);
    }

    public function update()
    {
        $id_berita = $this->input->post('id_berita');
        $keterangan = $this->input->post('keterangan');
        $tanggal_berita = $this->input->post('tanggal_berita');
        $link_berita = $this->input->post('link_berita');
        if (empty($nama_tutor) || empty($keahlian)) {
            $this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
            redirect('Berita/edit_berita/' . $id_berita);
        } else {
            $data = [
                'keterangan' => $keterangan,
                'tanggal_berita' => $tanggal_berita,
                'link_berita' => $link_berita,
            ];
            $this->Berita_model->update($id_berita, $data);
            // if ($reset == "on") {
            //     $this->Berita_model->reset($id_berita);
            // }

            $this->session->set_flashdata('success_message', 'Data berita berhasil diubah');
            redirect('Berita');
        }
    }

    public function delete($id_berita)
    {
        $this->Berita_model->delete($id_berita);
        $this->session->set_flashdata('success_message', 'Data berita berhasil dihapus');
        redirect('Berita');
    }
}
