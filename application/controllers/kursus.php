<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kursus extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('kursus_model');
	}

	public function index()
	{
		$param['main_content'] = 'kursus/list';
		$param['page_title'] = 'Kursus';
		$param['krs_list'] = $this->kursus_model->getAllKrs();
		$this->load->view('template', $param);
	}

	public function detail($id_kursus)
	{
		$id_kursus = $this->uri->segment(3);
		$data['main_content'] = 'kursus/list_detail';
		$data['page_title'] = 'Detail Kursus';
		$data['krs_list'] = $this->kursus_model->getKrs($id_kursus);
		$this->load->view('template', $data);
	}

	public function add_krs()
	{
		$param['main_content'] = 'kursus/add';
		$param['page_title'] = 'Tambah Kursus';
		$param['ttrs_list'] = $this->kursus_model->getAllTtrs();
		$this->load->view('template', $param);
	}

	public function create()
	{
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$icon = $_FILES['icon'];
		$jumlah_video = $this->input->post('jumlah_video');
		$jumlah_modul = $this->input->post('jumlah_modul');
		$judul1 = $this->input->post('judul1');
		$video1 = $_FILES['video1'];
		$modul1 = $_FILES['modul1'];
		$moduloverview1 = $_FILES['moduloverview1'];
		$judul2 = $this->input->post('judul2');
		$video2 = $_FILES['video2'];
		$modul2 = $_FILES['modul2'];
		$moduloverview2 = $_FILES['moduloverview2'];
		$judul3 = $this->input->post('judul3');
		$video3 = $_FILES['video3'];
		$modul3 = $_FILES['modul3'];
		$judul4 = $this->input->post('judul4');
		$video4 = $_FILES['video4'];
		$modul4 = $_FILES['modul4'];
		$judul5 = $this->input->post('judul5');
		$video5 = $_FILES['video5'];
		$modul5 = $_FILES['modul5'];
		$judul6 = $this->input->post('judul6');
		$video6 = $_FILES['video6'];
		$modul6 = $_FILES['modul6'];
		$judul7 = $this->input->post('judul7');
		$video7 = $_FILES['video7'];
		$modul7 = $_FILES['modul7'];
		$judul8 = $this->input->post('judul8');
		$video8 = $_FILES['video8'];
		$modul8 = $_FILES['modul8'];
		$judul9 = $this->input->post('judul9');
		$video9 = $_FILES['video9'];
		$modul9 = $_FILES['modul9'];
		$judul10 = $this->input->post('judul10');
		$video10 = $_FILES['video10'];
		$modul10 = $_FILES['modul10'];

		if (empty($nama_kursus) || empty($deskripsi) || empty($harga) || empty($jumlah_video) || empty($jumlah_modul)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('kursus/add_krs');
		} else {
			if ($icon = '') {
			} else {
				$config['upload_path'] = './assets/icon';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('icon')) {
					echo "Gagal Upload icon";
					die();
				} else {
					$icon = $this->upload->data('file_name');
				}
			}

			if ($video1 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video1 = $this->upload->data('file_name');
			}

			if ($modul1 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul1 = $this->upload->data('file_name');
			}

			if ($moduloverview1 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$moduloverview1 = $this->upload->data('file_name');
			}

			if ($video2 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video2 = $this->upload->data('file_name');
			}

			if ($modul2 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul2 = $this->upload->data('file_name');
			}

			if ($moduloverview2 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$moduloverview2 = $this->upload->data('file_name');
			}

			if ($video3 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video3 = $this->upload->data('file_name');
			}

			if ($modul3 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul3 = $this->upload->data('file_name');
			}

			if ($video4 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video4 = $this->upload->data('file_name');
			}

			if ($modul4 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul4 = $this->upload->data('file_name');
			}

			if ($video5 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video5 = $this->upload->data('file_name');
			}

			if ($modul5 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul5 = $this->upload->data('file_name');
			}

			if ($video6 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video6 = $this->upload->data('file_name');
			}

			if ($modul6 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul6 = $this->upload->data('file_name');
			}

			if ($video7 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video7 = $this->upload->data('file_name');
			}

			if ($modul7 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul7 = $this->upload->data('file_name');
			}

			if ($video8 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video8 = $this->upload->data('file_name');
			}

			if ($modul8 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul8 = $this->upload->data('file_name');
			}

			if ($video9 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video9 = $this->upload->data('file_name');
			}

			if ($modul9 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul9 = $this->upload->data('file_name');
			}

			if ($video10 = '') {
			} else {
				$config['upload_path'] = './assets/video';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$video10 = $this->upload->data('file_name');
			}

			if ($modul10 = '') {
			} else {
				$config['upload_path'] = './assets/modul';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;
				$modul10 = $this->upload->data('file_name');
			}

			$data = [
				'id_tutor' => $id_tutor,
				'nama_kursus' => $nama_kursus,
				'deskripsi' => $deskripsi,
				'harga' => $harga,
				'icon' => $icon,
				'jumlah_video' => $jumlah_video,
				'jumlah_modul' => $jumlah_modul,
				'judul1' => $judul1,
				'video1' => $video1,
				'modul1' => $modul1,
				'moduloverview1' => $moduloverview1,
				'judul2' => $judul2,
				'video2' => $video2,
				'modul2' => $modul2,
				'moduloverview2' => $moduloverview2,
				'judul3' => $judul3,
				'video3' => $video3,
				'modul3' => $modul3,
				'judul4' => $judul4,
				'video4' => $video4,
				'modul4' => $modul4,
				'judul5' => $judul5,
				'video5' => $video5,
				'modul5' => $modul5,
				'judul6' => $judul6,
				'video6' => $video6,
				'modul6' => $modul6,
				'judul7' => $judul7,
				'video7' => $video7,
				'modul7' => $modul7,
				'judul8' => $judul8,
				'video8' => $video8,
				'modul8' => $modul8,
				'judul9' => $judul9,
				'video9' => $video9,
				'modul9' => $modul9,
				'judul10' => $judul10,
				'video10' => $video10,
				'modul10' => $modul10,

			];

			$cek = $this->kursus_model->insert($data);
			if ($cek) {
				$this->session->set_flashdata('success_message', 'Data kursus berhasil ditambahkan');
				redirect('kursus');
			} else {
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('kursus/add_krs');
			}
		}
	}

	public function edit_krs($id_kursus)
	{
		$data['main_content'] = 'kursus/edit';
		$data['page_title'] = 'Edit Data Kursus';
		$data['krs'] = $this->kursus_model->getKkrs($id_kursus);
		$data['ttr_list'] = $this->kursus_model->getAllTtrs();
		$this->load->view('template', $data);
	}

	public function update()
	{
		$id_kursus 	= $this->input->post('id_kursus');
		$id_tutor 	= $this->input->post('id_tutor');
		$nama_kursus = $this->input->post('nama_kursus');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$icon = $_FILES['icon'];
		$jumlah_video = $this->input->post('jumlah_video');
		$jumlah_modul = $this->input->post('jumlah_modul');
		$judul1 = $this->input->post('judul1');
		$video1 = $_FILES['video1'];
		$modul1 = $_FILES['modul1'];
		$moduloverview1 = $_FILES['moduloverview1'];
		$judul2 = $this->input->post('judul2');
		$video2 = $_FILES['video2'];
		$modul2 = $_FILES['modul2'];
		$moduloverview2 = $_FILES['moduloverview2'];
		$judul3 = $this->input->post('judul3');
		$video3 = $_FILES['video3'];
		$modul3 = $_FILES['modul3'];
		$judul4 = $this->input->post('judul4');
		$video4 = $_FILES['video4'];
		$modul4 = $_FILES['modul4'];
		$judul5 = $this->input->post('judul5');
		$video5 = $_FILES['video5'];
		$modul5 = $_FILES['modul5'];
		$judul6 = $this->input->post('judul6');
		$video6 = $_FILES['video6'];
		$modul6 = $_FILES['modul6'];
		$judul7 = $this->input->post('judul7');
		$video7 = $_FILES['video7'];
		$modul7 = $_FILES['modul7'];
		$judul8 = $this->input->post('judul8');
		$video8 = $_FILES['video8'];
		$modul8 = $_FILES['modul8'];
		$judul9 = $this->input->post('judul9');
		$video9 = $_FILES['video9'];
		$modul9 = $_FILES['modul9'];
		$judul10 = $this->input->post('judul10');
		$video10 = $_FILES['video10'];
		$modul10 = $_FILES['modul10'];
		$reset = $this->input->post('reset');

		if (empty($nama_kursus) || empty($deskripsi) || empty($harga) || empty($jumlah_video) || empty($jumlah_modul)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('kursus/edit_krs/' . $id_kursus);
		} else {
			if ($icon = '' && $video1 = '' && $modul1 = '' && $moduloverview1 = '' && $video2 = '' && $modul2 = '' && $moduloverview2 = '' && $video3 = '' && $modul3 = '' && $video4 = '' && $modul4 = '' && $video5 = '' && $modul5 = '' && $video6 = '' && $modul6 = '' && $video7 = '' && $modul7 = '' && $video8 = '' && $modul8 = '' && $video9 = '' && $modul9 = '' && $video10 = '' && $modul10 = '') {
			} else {
				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'mkv|mp4|pdf|jpg|png|gif|tiff';
				$config['max_size'] = 256000;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('icon')) {
				} else {
					$icon = $this->upload->data('file_name');
				}
			}

			$data = [
				'id_kursus' => $id_kursus,
				'id_tutor' => $id_tutor,
				'nama_kursus' => $nama_kursus,
				'deskripsi' => $deskripsi,
				'harga' => $harga,
				'icon' => $icon,
				'jumlah_video' => $jumlah_video,
				'jumlah_modul' => $jumlah_modul,
				'judul1' => $judul1,
				'video1' => $video1,
				'modul1' => $modul1,
				'moduloverview1' => $moduloverview1,
				'judul2' => $judul2,
				'video2' => $video2,
				'modul2' => $modul2,
				'moduloverview2' => $moduloverview2,
				'judul3' => $judul3,
				'video3' => $video3,
				'modul3' => $modul3,
				'judul4' => $judul4,
				'video4' => $video4,
				'modul4' => $modul4,
				'judul5' => $judul5,
				'video5' => $video5,
				'modul5' => $modul5,
				'judul6' => $judul6,
				'video6' => $video6,
				'modul6' => $modul6,
				'judul7' => $judul7,
				'video7' => $video7,
				'modul7' => $modul7,
				'judul8' => $judul8,
				'video8' => $video8,
				'modul8' => $modul8,
				'judul9' => $judul9,
				'video9' => $video9,
				'modul9' => $modul9,
				'judul10' => $judul10,
				'video10' => $video10,
				'modul10' => $modul10,
			];
			$this->kursus_model->update($id_kursus, $data);
			if ($reset == "on") {
				$this->kursus_model->reset($id_kursus);
			}
			$this->session->set_flashdata('success_message', 'Data kursus berhasil diubah');
			redirect('kursus');
		}
	}

	public function delete($id_kursus)
	{
		$this->kursus_model->delete($id_kursus);
		$this->session->set_flashdata('success_message', 'Data kursus berhasil dihapus');
		redirect('kursus');
	}
}
