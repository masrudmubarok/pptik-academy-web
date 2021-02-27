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
		$param['dkrs_list'] = $this->Kursus_model->getAllDkrs();
		$this->load->view('template', $param);
	}

	public function add_dkrs()
	{
		$param['main_content'] = 'kursus/add_detail';
		$param['page_title'] = 'Tambah Detail Kursus';
		$param['kkrs_list'] = $this->Kursus_model->getkkrs();
		$param['dkrs_list'] = $this->Kursus_model->getAllDkrs();
		$this->load->view('template', $param);
	}

	public function create1()
	{
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');

		if (empty($nama_kursus) || empty($harga)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/add_krs');
		} else {
			$data1 = [
				'id_tutor' => $id_tutor,
				'nama_kursus' => $nama_kursus,
				'harga' => $harga,
			];

			$cek1 = $this->Kursus_model->insert1($data1);
			if ($cek1) {
				$this->session->set_flashdata('success_message', 'Data kursus berhasil ditambahkan');
				redirect('Kursus/add_dkrs');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Kursus/add_krs');
			}
		}
	}

	public function create2()
	{
		$id_kursus 	= $this->input->post('id_kursus');
		$video1 = $this->input->post('video1');
		$des_vid1 = $this->input->post('des_vid1');
		$video2 = $this->input->post('video2');
		$des_vid2 = $this->input->post('des_vid2');
		$video3 = $this->input->post('video3');
		$des_vid3 = $this->input->post('des_vid3');
		$video4 = $this->input->post('video4');
		$des_vid4 = $this->input->post('des_vid4');
		$video5 = $this->input->post('video5');
		$des_vid5 = $this->input->post('des_vid5');
		$video6 = $this->input->post('video6');
		$des_vid6 = $this->input->post('des_vid6');
		$video7 = $this->input->post('video7');
		$des_vid7 = $this->input->post('des_vid7');
		$video8 = $this->input->post('video8');
		$des_vid8 = $this->input->post('des_vid8');
		$video9 = $this->input->post('video9');
		$des_vid9 = $this->input->post('des_vid9');
		$video10 = $this->input->post('video10');
		$des_vid10 = $this->input->post('des_vid10');
		$icon = $_FILES['icon'];

		if (empty($video1)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/add_dkrs');
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

			$data2 = [
				'id_kursus' => $id_kursus,
				'video1' => $video1,
				'des_vid1' => $des_vid1,
				'video2' => $video2,
				'des_vid2' => $des_vid2,
				'video3' => $video3,
				'des_vid3' => $des_vid3,
				'video4' => $video4,
				'des_vid4' => $des_vid4,
				'video5' => $video5,
				'des_vid5' => $des_vid5,
				'video6' => $video6,
				'des_vid6' => $des_vid6,
				'video7' => $video7,
				'des_vid7' => $des_vid7,
				'video8' => $video8,
				'des_vid8' => $des_vid8,
				'video9' => $video9,
				'des_vid9' => $des_vid9,
				'video10' => $video10,
				'des_vid10' => $des_vid10,
				'icon' => $icon
			];

			$cek2 = $this->Kursus_model->insert2($data2);
			if ($cek2) {
				$this->session->set_flashdata('success_message', 'Data kursus berhasil ditambahkan');
				redirect('Kursus');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Kursus/add_dkrs');
			}
		}
	}

	public function edit_krs($id_kursus)
	{
		$data['main_content'] = 'kursus/edit';
		$data['page_title'] = 'Edit Data Kursus';
		$data['krs'] = $this->Kursus_model->getKrs($id_kursus);
		$data['krsd'] = $this->Kursus_model->getKrsdk($id_kursus);
		$data['ttr_list'] = $this->Kursus_model->getAllTtrs();
		$this->load->view('template', $data);
	}

	public function edit_dkrs($id_detailkursus)
	{
		$data['main_content'] = 'kursus/edit_detail';
		$data['page_title'] = 'Edit Data Detail Kursus';
		$data['dkrs'] = $this->Kursus_model->getKrs($id_detailkursus);
		$this->load->view('template', $data);
	}

	public function update1()
	{
		$id_kursus 	= $this->input->post('id_kursus');
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');
		$video1 = $this->input->post('video1');
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
			];
			$this->Kursus_model->update1($id_kursus, $data1);
			if ($reset == "on") {
				$this->Kursus_model->reset($id_kursus);
			}

			$this->session->set_flashdata('success_message', 'Data kursus berhasil diubah');
			redirect('Kursus');
		}
	}

	public function update2()
	{
		$id_detailkursus 	= $this->input->post('id_detailkursus');
		$id_kursus 	= $this->input->post('id_kursus');
		$video1 = $this->input->post('video1');
		$des_vid1 = $this->input->post('des_vid1');
		$video2 = $this->input->post('video2');
		$des_vid2 = $this->input->post('des_vid2');
		$video3 = $this->input->post('video3');
		$des_vid3 = $this->input->post('des_vid3');
		$video4 = $this->input->post('video4');
		$des_vid4 = $this->input->post('des_vid4');
		$video5 = $this->input->post('video5');
		$des_vid5 = $this->input->post('des_vid5');
		$video6 = $this->input->post('video6');
		$des_vid6 = $this->input->post('des_vid6');
		$video7 = $this->input->post('video7');
		$des_vid7 = $this->input->post('des_vid7');
		$video8 = $this->input->post('video8');
		$des_vid8 = $this->input->post('des_vid8');
		$video9 = $this->input->post('video9');
		$des_vid9 = $this->input->post('des_vid9');
		$video10 = $this->input->post('video10');
		$des_vid10 = $this->input->post('des_vid10');
		$icon = $_FILES['icon'];
		$reset = $this->input->post('reset');

		if (empty($nama_kursus) || empty($harga)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/edit_dkrs/' . $id_detailkursus);
		} else {
			$data2 = [
				'id_detailkursus' => $id_detailkursus,
				'id_kursus' => $id_kursus,
				'video1' => $video1,
				'des_vid1' => $des_vid1,
				'video2' => $video2,
				'des_vid2' => $des_vid2,
				'video3' => $video3,
				'des_vid3' => $des_vid3,
				'video4' => $video4,
				'des_vid4' => $des_vid4,
				'video5' => $video5,
				'des_vid5' => $des_vid5,
				'video6' => $video6,
				'des_vid6' => $des_vid6,
				'video7' => $video7,
				'des_vid7' => $des_vid7,
				'video8' => $video8,
				'des_vid8' => $des_vid8,
				'video9' => $video9,
				'des_vid9' => $des_vid9,
				'video10' => $video10,
				'des_vid10' => $des_vid10,
				'icon' => $icon
			];
			$this->Kursus_model->update2($id_detailkursus, $data2);
			if ($reset == "on") {
				$this->Kursus_model->reset($id_detailkursus);
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
