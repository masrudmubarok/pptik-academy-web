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
    // $this->db->join('detail_kursus', 'detail_kursus.id_kursus = kursus.id_kursus');
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

  public function getKrs($id_kursus)
  {
    return $this->db->where('id_kursus', $id_kursus)->get('kursus')->row();
  }

  function insert($table1, $data1, $table2, $data2)
  {
    $this->db->insert($table1, $data1);
    $id_table1 = $this->db->insert_id();

    array_unshift($data2, array('id_kursus' => $id_table1));

    $this->db->insert($table2, $data2);
    $id_table2    = $this->db->insert_id();

    $return_data  = array($table1 => $id_table1, $table2 => $id_table2);
    return $return_data;
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
