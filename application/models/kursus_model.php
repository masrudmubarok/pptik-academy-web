<?php
class Kursus_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllKrs()
  {
    // return $this->db->get('kursus')->result();
    $this->db->select('*');
    $this->db->from('kursus');
    $this->db->join('tutor', 'tutor.id_tutor = kursus.id_tutor');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllTtrs()
  {
    $this->db->select('*');
    $this->db->from('tutor');
    $query = $this->db->get();
    return $query->result();
  }

  public function getKrs($id_kursus)
  {
    return $this->db->where('id_kursus', $id_kursus)->get('kursus')->row();
  }

  public function insert($data)
  {
    $this->db->insert('kursus', $data);
    return $this->db->affected_rows();
  }

  public function update($id_kursus, $data)
  {
    $this->db->where('id_kursus', $id_kursus)->update('kursus', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_kursus)
  {
    $this->db->where('id_kursus', $id_kursus)->delete('kursus');
    return $this->db->affected_rows();
  }
}
