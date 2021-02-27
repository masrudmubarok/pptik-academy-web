<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kursus_model');
	}

	public function index()
	{
		$param['main_content'] = 'kursus/list';
		$param['page_title'] = 'Courses';
		$param['krs_list'] = $this->Kursus_model->getAllKrs();
		$this->load->view('template', $param);
	}

	public function detail($id_kursus)
	{
		$id_kursus = $this->uri->segment(3);
		$data['main_content'] = 'kursus/list_detail';
		$data['page_title'] = 'Detail Courses';
		$data['krs_list'] = $this->Kursus_model->getKrsd($id_kursus);
		$this->load->view('template', $data);
	}

	public function add_krs()
	{
		$param['main_content'] = 'kursus/add';
		$param['page_title'] = 'Tambah Kursus';
		$param['ttrs_list'] = $this->Kursus_model->getAllTtrs();
		$this->load->view('template', $param);
	}

	public function create()
	{
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');
		$icon = $_FILES['icon'];
		$video1 = $this->input->post('video1');
		$judulvid1 = $this->input->post('judulvid1');
		$video2 = $this->input->post('video2');
		$judulvid2 = $this->input->post('judulvid2');
		$video3 = $this->input->post('video3');
		$judulvid3 = $this->input->post('judulvid3');
		$video4 = $this->input->post('video4');
		$judulvid4 = $this->input->post('judulvid4');
		$video5 = $this->input->post('video5');
		$judulvid5 = $this->input->post('judulvid5');
		$video6 = $this->input->post('video6');
		$judulvid6 = $this->input->post('judulvid6');
		$video7 = $this->input->post('video7');
		$judulvid7 = $this->input->post('judulvid7');
		$video8 = $this->input->post('video8');
		$judulvid8 = $this->input->post('judulvid8');
		$video9 = $this->input->post('video9');
		$judulvid9 = $this->input->post('judulvid9');
		$video10 = $this->input->post('video10');
		$judulvid10 = $this->input->post('judulvid10');

		if (empty($nama_kursus) || empty($harga)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/add_krs');
		} else {
			if ($icon = '') {
			} else {
				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'jpg|png|gif|tiff';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('icon')) {
					echo "Gagal Upload";
					die();
				} else {
					$icon = $this->upload->data('file_name');
				}
			}

			$data = [
				'id_tutor' => $id_tutor,
				'nama_kursus' => $nama_kursus,
				'harga' => $harga,
				'icon' => $icon,
				'video1' => $video1,
				'judulvid1' => $judulvid1,
				'video2' => $video2,
				'judulvid2' => $judulvid2,
				'video3' => $video3,
				'judulvid3' => $judulvid3,
				'video4' => $video4,
				'judulvid4' => $judulvid4,
				'video5' => $video5,
				'judulvid5' => $judulvid5,
				'video6' => $video6,
				'judulvid6' => $judulvid6,
				'video7' => $video7,
				'judulvid7' => $judulvid7,
				'video8' => $video8,
				'judulvid8' => $judulvid8,
				'video9' => $video9,
				'judulvid9' => $judulvid9,
				'video10' => $video10,
				'judulvid10' => $judulvid10,

			];

			$cek = $this->Kursus_model->insert($data);
			if ($cek) {
				$this->session->set_flashdata('success_message', 'Data kursus berhasil ditambahkan');
				redirect('Kursus');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Kursus/add_krs');
			}
		}
	}

	public function edit_krs($id_kursus)
	{
		$data['main_content'] = 'kursus/edit';
		$data['page_title'] = 'Edit Data Kursus';
		$data['krs'] = $this->Kursus_model->getKrs($id_kursus);
		$data['ttr_list'] = $this->Kursus_model->getAllTtrs();
		$this->load->view('template', $data);
	}

	public function update()
	{
		$id_kursus 	= $this->input->post('id_kursus');
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');
		$video1 = $this->input->post('video1');
		$judulvid1 = $this->input->post('judulvid1');
		$video2 = $this->input->post('video2');
		$judulvid2 = $this->input->post('judulvid2');
		$video3 = $this->input->post('video3');
		$judulvid3 = $this->input->post('judulvid3');
		$video4 = $this->input->post('video4');
		$judulvid4 = $this->input->post('judulvid4');
		$video5 = $this->input->post('video5');
		$judulvid5 = $this->input->post('judulvid5');
		$video6 = $this->input->post('video6');
		$judulvid6 = $this->input->post('judulvid6');
		$video7 = $this->input->post('video7');
		$judulvid7 = $this->input->post('judulvid7');
		$video8 = $this->input->post('video8');
		$judulvid8 = $this->input->post('judulvid8');
		$video9 = $this->input->post('video9');
		$judulvid9 = $this->input->post('judulvid9');
		$video10 = $this->input->post('video10');
		$judulvid10 = $this->input->post('judulvid10');
		$reset = $this->input->post('reset');

		if (empty($nama_kursus) || empty($harga)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/edit_krs/' . $id_kursus);
		} else {
			$data1 = [
				'id_tutor' => $id_tutor,
				'nama_kursus' => $nama_kursus,
				'harga' => $harga,
				'video1' => $video1,
				'judulvid1' => $judulvid1,
				'video2' => $video2,
				'judulvid2' => $judulvid2,
				'video3' => $video3,
				'judulvid3' => $judulvid3,
				'video4' => $video4,
				'judulvid4' => $judulvid4,
				'video5' => $video5,
				'judulvid5' => $judulvid5,
				'video6' => $video6,
				'judulvid6' => $judulvid6,
				'video7' => $video7,
				'judulvid7' => $judulvid7,
				'video8' => $video8,
				'judulvid8' => $judulvid8,
				'video9' => $video9,
				'judulvid9' => $judulvid9,
				'video10' => $video10,
				'judulvid10' => $judulvid10,
			];
			$this->Kursus_model->update1($id_kursus, $data1);
			if ($reset == "on") {
				$this->Kursus_model->reset($id_kursus);
			}

			$this->session->set_flashdata('success_message', 'Data kursus berhasil diubah');
			redirect('Kursus');
		}
	}

	public function delete($id_kursus)
	{
		$this->Kursus_model->delete($id_kursus);
		$this->session->set_flashdata('success_message', 'Data kursus berhasil dihapus');
		redirect('Kursus');
	}
}
