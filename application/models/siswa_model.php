<?php
class Siswa_model extends CI_Model
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
    // $this->db->join('ambil_kursus', 'ambil_kursus.id_siswa = siswa.id_siswa');
    // $this->db->join('kursus', 'kursus.id_kursus = ambil_kursus.id_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllAkrs()
  {
    $this->db->select('*');
    $this->db->from('ambil_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllKrss()
  {
    $this->db->select('*');
    $this->db->from('kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getSwa($id_siswa)
  {
    return $this->db->where('id_siswa', $id_siswa)->get('siswa')->row();
  }

  public function insert($data)
  {
    $this->db->insert('siswa', $data);
    return $this->db->affected_rows();
  }

  public function update($id_siswa, $data)
  {
    $this->db->where('id_siswa', $id_siswa)->update('siswa', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa)->delete('siswa');
    return $this->db->affected_rows();
  }
}
