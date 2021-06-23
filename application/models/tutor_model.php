<?php
class Tutor_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllTtr()
  {
    $this->db->select('*');
    $this->db->from('tutor');
    $query = $this->db->get();
    return $query->result();
  }

  public function getTtr($id_tutor)
  {
    return $this->db->where('id_tutor', $id_tutor)->get('tutor')->row();
  }

  public function insert($data)
  {
    $this->db->insert('tutor', $data);
    return $this->db->affected_rows();
  }

  public function update($id_tutor, $data)
  {
    $this->db->where('id_tutor', $id_tutor)->update('tutor', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_tutor)
  {
    $this->db->where('id_tutor', $id_tutor)->delete('tutor');
    return $this->db->affected_rows();
  }
}
