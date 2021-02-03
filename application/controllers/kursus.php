<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kursus extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kursus_model');
	}

	public function index(){
		$param['main_content'] = 'kursus/list';
		$param['page_title'] = 'Courses';
		$param['krs_list'] = $this->Kursus_model->getAllKrs();
		$this->load->view('template', $param);
	}

	public function add_krs(){
		$param['main_content'] = 'kursus/add';
		$param['page_title'] = 'Tambah Kursus';
		$param['ttrs_list'] = $this->Kursus_model->getAllTtrs();
		$this->load->view('template', $param);
	}

	public function create(){
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');
		$icon = $this->input->post('icon');
		$video1 = $this->input->post('video1');
		$video2 = $this->input->post('video2');
		$video3 = $this->input->post('video3');
		$video4 = $this->input->post('video4');
		$video5 = $this->input->post('video5');
		$video6 = $this->input->post('video6');
		$video7 = $this->input->post('video7');
		$video8 = $this->input->post('video8');
		$video9 = $this->input->post('video9');
		$video10 = $this->input->post('video10');

		if (empty($nama_kursus) || empty($harga) || empty($icon)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/add_krs');
		} else {
			$data = [
				'id_tutor' => $id_tutor, 
				'nama_kursus' => $nama_kursus,
				'harga' => $harga,
				'icon' => $icon,
				'video1' => $video1,
				'video2' => $video2,
				'video3' => $video3,
				'video4' => $video4,
				'video5' => $video5,
				'video6' => $video6,
				'video7' => $video7,
				'video8' => $video8,
				'video9' => $video9,
				'video10' => $video10,
			];
			$cek = $this->Kursus_model->insert($data);
			if($cek){
				$this->session->set_flashdata('success_message', 'Data kursus berhasil ditambahkan');
				redirect('Kursus');
			}else{
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Kursus/add_krs');
			}

		}
	}

	public function edit_krs($id_kursus){
		$data['main_content'] = 'kursus/edit';
		$data['page_title'] = 'Edit Data Kursus';
		$data['krs'] = $this->Kursus_model->getKrs($id_kursus);
		$this->load->view('template', $data);
	}

	public function update(){
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$harga = $this->input->post('harga');
		$icon = $this->input->post('icon');
		$video1 = $this->input->post('video1');
		$video2 = $this->input->post('video2');
		$video3 = $this->input->post('video3');
		$video4 = $this->input->post('video4');
		$video5 = $this->input->post('video5');
		$video6 = $this->input->post('video6');
		$video7 = $this->input->post('video7');
		$video8 = $this->input->post('video8');
		$video9 = $this->input->post('video9');
		$video10 = $this->input->post('video10');
		$reset = $this->input->post('reset');
		if (empty($nama_kursus) || empty($harga) || empty($icon)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kursus/edit_krs/'.$id_kursus);
		} else {
			$data = [
				'id_tutor' => $id_tutor, 
				'nama_kursus' => $nama_kursus,
				'harga' => $harga,
				'icon' => $icon,
				'video1' => $video1,
				'video2' => $video2,
				'video3' => $video3,
				'video4' => $video4,
				'video5' => $video5,
				'video6' => $video6,
				'video7' => $video7,
				'video8' => $video8,
				'video9' => $video9,
				'video10' => $video10,
				];
				$this->Kursus_model->update($id_kursus, $data);
				if($reset == "on"){
					$this->Kursus_model->reset($id_kursus);
				}

				$this->session->set_flashdata('success_message', 'Data kursus berhasil diubah');
				redirect('Kursus');
		}
	}

	public function delete($id_kursus){
		$this->Kursus_model->delete($id_kursus);
		$this->session->set_flashdata('success_message', 'Data kursus berhasil dihapus');
		redirect('Kursus');
	}
}