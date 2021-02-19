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
    $this->db->from('detail_kursus');
    $this->db->join('kursus', 'detail_kursus.id_kursus = kursus.id_kursus');
    $this->db->join('tutor', 'kursus.id_tutor = tutor.id_tutor');
    $query = $this->db->get();
    return $query->result();
  }

  public function getKrsd($id_kursus)
  {
    // return $this->db->get('kursus')->result();
    $this->db->select('*');
    $this->db->from('detail_kursus');
    $this->db->join('kursus', 'detail_kursus.id_kursus = kursus.id_kursus');
    $this->db->join('tutor', 'kursus.id_tutor = tutor.id_tutor');
    $this->db->where('kursus.id_kursus', $id_kursus);
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

  public function getAllDkrs()
  {
    $this->db->select('*');
    $this->db->from('detail_kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getkkrs()
  {
    $this->db->select('*');
    $this->db->from('kursus');
    $query = $this->db->get();
    return $query->result();
  }

  public function getKrs($id_kursus)
  {
    return $this->db->where('id_kursus', $id_kursus)->get('kursus')->row();
  }

  function insert1($data1)
  {
    $this->db->insert('kursus', $data1);
    return $this->db->affected_rows();
  }

  function insert2($data2)
  {
    $this->db->insert('detail_kursus', $data2);
    return $this->db->affected_rows();
  }

  public function update($id_kursus, $data)
  {
    $this->db->where('id_kursus', $id_kursus)->update('kursus', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_kursus)
  {
    $sql = "DELETE dk, k FROM detail_kursus dk
    JOIN kursus k ON dk.id_kursus = k.id_kursus
    WHERE k.id_kursus = $id_kursus AND dk.id_detailkursus = $id_kursus";

    $this->db->query($sql, array($id_kursus));
  }
}
