<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		$param['main_content'] = 'siswa/list';
		$param['page_title'] = 'Students';
		$param['swa_list'] = $this->Siswa_model->getAllSwa();
		$this->load->view('template', $param);
	}

	public function add_swa()
	{
		$param['main_content'] = 'siswa/add';
		$param['page_title'] = 'Tambah Siswa';
		$this->load->view('template', $param);
	}

	public function create()
	{
		$nama_siswa = $this->input->post('nama_siswa');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');
		if (empty($nama_siswa) || empty($username) || empty($password)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Siswa/add_swa');
		} else {
			$data = [
				'nama_siswa' => $nama_siswa,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'kota' => $kota,
				'negara' => $negara,
			];
			$cek = $this->Siswa_model->insert($data);
			if ($cek) {
				$this->session->set_flashdata('success_message', 'Data siswa berhasil ditambahkan');
				redirect('Siswa');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Siswa/add_swa');
			}
		}
	}

	public function edit_swa($id_siswa)
	{
		$data['main_content'] = 'siswa/edit';
		$data['page_title'] = 'Edit Data Siswa';
		$data['swa'] = $this->Siswa_model->getSwa($id_siswa);
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
			redirect('Siswa/edit_swa/' . $id_siswa);
		} else {
			$data = [
				'nama_siswa' => $nama_siswa,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'kota' => $kota,
				'negara' => $negara,
			];
			$this->Siswa_model->update($id_siswa, $data);
			if ($reset == "on") {
				$this->Siswa_model->reset($id_siswa);
			}

			$this->session->set_flashdata('success_message', 'Data siswa berhasil diubah');
			redirect('Siswa');
		}
	}

	public function delete($id_siswa)
	{
		$this->Siswa_model->delete($id_siswa);
		$this->session->set_flashdata('success_message', 'Data siswa berhasil dihapus');
		redirect('Siswa');
	}
}
