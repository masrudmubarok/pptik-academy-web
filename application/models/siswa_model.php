<?php
class siswa_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllSwa()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('ambil_kursus', 'siswa.id_siswa = ambil_kursus.id_siswa');
    $this->db->join('kursus', 'ambil_kursus.id_kursus = kursus.id_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getswas()
  {
    $this->db->distinct();
    $this->db->select('*');
    $this->db->from('siswa');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllAkrs()
  {
    $this->db->distinct();
    $this->db->select('*');
    $this->db->from('ambil_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllKrss()
  {
    $this->db->distinct();
    $this->db->select('*');
    $this->db->from('kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getSwa($id_siswa)
  {
    return $this->db->where('id_siswa', $id_siswa)->get('siswa')->row();
  }

  public function getSwad($id_siswa)
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('ambil_kursus', 'siswa.id_siswa = ambil_kursus.id_siswa');
    $this->db->join('kursus', 'ambil_kursus.id_kursus = kursus.id_kursus');
    $this->db->where('siswa.id_siswa', $id_siswa);
    $query = $this->db->get();
    return $query->result();
  }

  public function getAkrs($id_ambilkursus)
  {
    return $this->db->where('id_ambilkursus', $id_ambilkursus)->get('ambil_kursus')->row();
  }

  // public function insert1($data1)
  // {
  //   $this->db->insert('siswa', $data1);
  //   return $this->db->affected_rows();
  // }

  // public function insert2($data2)
  // {
  //   $this->db->insert('ambil_kursus', $data2);
  //   return $this->db->affected_rows();
  // }

  public function update1($id_siswa, $data1)
  {
    $this->db->where('id_siswa', $id_siswa)->update('siswa', $data1);
    return $this->db->affected_rows();
  }

  public function update2($id_ambilkursus, $data2)
  {
    $this->db->where('id_ambilkursus', $id_ambilkursus)->update('ambil_kursus', $data2);
    return $this->db->affected_rows();
  }

  public function delete($id_ambilkursus)
  {
    $this->db->where('id_ambilkursus', $id_ambilkursus)->delete('ambil_kursus');
    return $this->db->affected_rows();
  }
}
