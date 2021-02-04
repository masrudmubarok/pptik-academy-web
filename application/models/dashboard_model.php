<?php
class Dashboard_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function sum_kursus()
  {
    $sql = "SELECT count(id_kursus) as jumlah_kursus FROM kursus";
    $result = $this->db->query($sql);
    return $result->row()->jumlah_kursus;
  }

  public function sum_tutor()
  {
    $sql = "SELECT count(id_tutor) as jumlah_tutor FROM tutor";
    $result = $this->db->query($sql);
    return $result->row()->jumlah_tutor;
  }

  public function sum_siswa()
  {
    $sql = "SELECT count(id_siswa) as jumlah_siswa FROM siswa";
    $result = $this->db->query($sql);
    return $result->row()->jumlah_siswa;
  }
}
