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
		$param['akrs_list'] = $this->Siswa_model->getAllAkrs();
		$param['krss_list'] = $this->Siswa_model->getAllKrss();
		$this->load->view('template', $param);
	}

	public function create()
	{
		$kode_kategori = $this->input->post('kode_kategori');
		$id_rekening = $this->input->post('id_rekening');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$keterangan = $this->input->post('keterangan');
		$pemasukan = $this->input->post('pemasukan');
		$pengeluaran = $this->input->post('pengeluaran');
		if (empty($tanggal_transaksi) || empty($keterangan)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Transaksi/add_trs');
		} else {
			$data = [
				'kode_kategori' => $kode_kategori,
				'id_rekening' => $id_rekening,
				'tanggal_transaksi' => $tanggal_transaksi,
				'keterangan' => $keterangan,
				'pemasukan' => $pemasukan,
				'pengeluaran' => $pengeluaran,
			];
			$cek = $this->Transaksi_model->insert($data);
			if ($cek) {
				$this->session->set_flashdata('success_message', 'Data transaksi berhasil ditambahkan');
				redirect('Transaksi');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Transaksi/add_trs');
			}
		}
	}

	public function edit_trs($id_transaksi)
	{
		$data['main_content'] = 'transaksi/edit';
		$data['page_title'] = 'Edit Data Transaksi';
		$data['trs'] = $this->Transaksi_model->gettrs($id_transaksi);
		$param['ktrs_list'] = $this->Transaksi_model->getAllktrs();
		$this->load->view('template', $data);
	}

	public function update()
	{
		$id_transaksi = $this->input->post('id_transaksi');
		$id_rekening = $this->input->post('id_rekening');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$keterangan = $this->input->post('keterangan');
		$pemasukan = $this->input->post('pemasukan');
		$pengeluaran = $this->input->post('pengeluaran');
		if (empty($tanggal_transaksi) || empty($keterangan)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Transaksi/edit_trs/' . $id_transaksi);
		} else {
			$data = [
				'id_transaksi' => $id_transaksi,
				'id_rekening' => $id_rekening,
				'tanggal_transaksi' => $tanggal_transaksi,
				'pemasukan' => $pemasukan,
				'pengeluaran' => $pengeluaran,
				'keterangan' => $keterangan,
			];
			$this->Transaksi_model->update($id_transaksi, $data);
			if ($reset == "on") {
				$this->Transaksi_model->reset($id_transaksi);
			}

			$this->session->set_flashdata('success_message', 'Data transaksi berhasil diubah');
			redirect('Transaksi');
		}
	}

	public function delete($id_transaksi)
	{
		$this->Transaksi_model->delete($id_transaksi);
		$this->session->set_flashdata('success_message', 'Data transaksi berhasil dihapus');
		redirect('Transaksi');
	}
}
