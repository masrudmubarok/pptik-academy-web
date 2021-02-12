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

  public function getSwa($id_siswa)
  {
    $sql = "SELECT siswa.nama_siswa, ambil_kursus.status_kursus, kursus.nama_kursus FROM siswa JOIN ambil_kursus ON siswa.id_siswa = ambil_kursus.id_siswa JOIN kursus ON ambil_kursus.id_kursus = kursus.id_kursus WHERE siswa.id_siswa = $id_siswa";
    $this->db->query($sql, array($id_siswa));
  }

  public function insert1($data1)
  {
    $this->db->insert('siswa', $data1);
    return $this->db->affected_rows();
  }

  public function insert2($data2)
  {
    $this->db->insert('ambil_kursus', $data2);
    return $this->db->affected_rows();
  }

  public function update($id_siswa, $data)
  {
    $this->db->where('id_siswa', $id_siswa)->update('siswa', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_ambilkursus)
  {
    $this->db->where('id_ambilkursus', $id_ambilkursus)->delete('ambil_kursus');
    return $this->db->affected_rows();
  }
}
