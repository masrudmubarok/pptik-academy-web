<?php
class Berita_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllBerita()
    {
        // return $this->db->get('tutor')->result();
        $this->db->select('*');
        $this->db->from('berita');
        $query = $this->db->get();
        return $query->result();
    }

    public function getBerita($id_berita)
    {
        return $this->db->where('id_berita', $id_berita)->get('berita')->row();
    }

    public function insert($data)
    {
        $this->db->insert('berita', $data);
        return $this->db->affected_rows();
    }

    public function update($id_berita, $data)
    {
        $this->db->where('id_berita', $id_berita)->update('berita', $data);
        return $this->db->affected_rows();
    }

    public function delete($id_berita)
    {
        $this->db->where('id_berita', $id_berita)->delete('berita');
        return $this->db->affected_rows();
    }
}
