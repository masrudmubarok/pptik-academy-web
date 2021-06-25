<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
    }

    public function index()
    {
        $param['main_content'] = 'berita/list';
        $param['page_title'] = 'Berita';
        $param['berita_list'] = $this->berita_model->getAllBerita();
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
            redirect('berita/add_berita');
        } else {
            $data = [
                'keterangan' => $keterangan,
                'tanggal_berita' => $tanggal_berita,
                'link_berita' => $link_berita,
            ];
            $cek = $this->berita_model->insert($data);
            if ($cek) {
                $this->session->set_flashdata('success_message', 'Data berita berhasil ditambahkan');
                redirect('berita');
            } else {
                $this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
                redirect('berita/add_berita');
            }
        }
    }

    public function edit_berita($id_berita)
    {
        $data['main_content'] = 'berita/edit';
        $data['page_title'] = 'Edit Data Berita';
        $data['berita'] = $this->berita_model->getBerita($id_berita);
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
            redirect('berita/edit_berita/' . $id_berita);
        } else {
            $data = [
                'keterangan' => $keterangan,
                'tanggal_berita' => $tanggal_berita,
                'link_berita' => $link_berita,
            ];
            $this->berita_model->update($id_berita, $data);
            $this->session->set_flashdata('success_message', 'Data berita berhasil diubah');
            redirect('berita');
        }
    }

    public function delete($id_berita)
    {
        $this->berita_model->delete($id_berita);
        $this->session->set_flashdata('success_message', 'Data berita berhasil dihapus');
        redirect('berita');
    }
}
