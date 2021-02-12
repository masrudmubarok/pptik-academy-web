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
		$param['swa_list'] = $this->Siswa_model->getswas();
		$this->load->view('template', $param);
	}

	public function detail()
	{
		$param['main_content'] = 'siswa/list_detail';
		$param['page_title'] = 'Students Courses';
		$param['swa_list'] = $this->Siswa_model->getAllSwa();
		$this->load->view('template', $param);
	}

	public function add_swa()
	{
		$param['main_content'] = 'siswa/add';
		$param['page_title'] = 'Tambah Siswa';
		$this->load->view('template', $param);
	}

	public function add_dswa()
	{
		$param['main_content'] = 'siswa/add_detail';
		$param['page_title'] = 'Tambah Detail Siswa';
		$param['swas_list'] = $this->Siswa_model->getswas();
		$param['akrss_list'] = $this->Siswa_model->getAllAkrs();
		$param['krss_list'] = $this->Siswa_model->getAllKrss();
		$this->load->view('template', $param);
	}

	public function create1()
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
			$data1 = [
				'nama_siswa' => $nama_siswa,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'kota' => $kota,
				'negara' => $negara,
			];
			$cek1 = $this->Siswa_model->insert1($data1);
			if ($cek1) {
				$this->session->set_flashdata('success_message', 'Data siswa berhasil ditambahkan');
				redirect('Siswa');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Siswa/add_swa');
			}
		}
	}

	public function create2()
	{
		$id_siswa = $this->input->post('id_siswa');
		$id_kursus = $this->input->post('id_kursus');
		$status_pembayaran = $this->input->post('status_pembayaran');
		$status_kursus = $this->input->post('status_kursus');
		$sertifikat = $_FILES['sertifikat'];
		if (empty($id_siswa) || empty($id_kursus)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Siswa/add_dswa');
		} else {
			if ($sertifikat = '') {
			} else {
				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'jpg|png|gif|tiff|pdf';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('sertifikat')) {
					echo "Gagal Upload";
					die();
				} else {
					$sertifikat = $this->upload->data('file_name');
				}
			}

			$data2 = [
				'id_siswa' => $id_siswa,
				'id_kursus' => $id_kursus,
				'status_pembayaran' => $status_pembayaran,
				'status_kursus' => $status_kursus,
				'sertifikat' => $sertifikat,
			];
			$cek2 = $this->Siswa_model->insert2($data2);
			if ($cek2) {
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
			// if ($reset == "on") {
			// 	$this->Siswa_model->reset($id_siswa);
			// }

			$this->session->set_flashdata('success_message', 'Data siswa berhasil diubah');
			redirect('Siswa');
		}
	}

	public function delete($id_ambilkursus)
	{
		$this->Siswa_model->delete($id_ambilkursus);
		$this->session->set_flashdata('success_message', 'Data pengambilan kursus siswa berhasil dihapus');
		redirect('Siswa/detail');
	}
}
