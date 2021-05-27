<?php
class Ujian_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllUjian()
    {
        $this->db->select('*');
        $this->db->from('ujian');
        $this->db->join('siswa', 'ujian.id_siswa = siswa.id_siswa');
        $this->db->join('kursus', 'ujian.id_kursus = kursus.id_kursus');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKursus()
    {
        $this->db->select('*');
        $this->db->from('kursus');
        $query = $this->db->get();
        return $query->result();
    }

    public function getUjianId($id_ujian)
    {
        return $this->db->where('id_ujian', $id_ujian)->get('ujian')->row();
    }

    public function getUjianId1($id_ujian)
    {
        $this->db->select('*');
        $this->db->from('ujian');
        $this->db->join('siswa', 'ujian.id_siswa = siswa.id_siswa');
        $this->db->join('kursus', 'ujian.id_kursus = kursus.id_kursus');
        $this->db->where('ujian.id_ujian', $id_ujian);
        $query = $this->db->get();
        return $query->result();
    }

    public function getSiswaId($id_siswa)
    {
        return $this->db->where('id_siswa', $id_siswa)->get('siswa')->row();
    }

    public function getKursusId($id_kursus)
    {
        return $this->db->where('id_kursus', $id_kursus)->get('kursus')->row();
    }

    public function update($id_ujian, $data1)
    {
        $this->db->where('id_ujian', $id_ujian)->update('ujian', $data1);
        return $this->db->affected_rows();
    }

    public function delete($id_ujian)
    {
        $this->db->where('id_ujian', $id_ujian)->delete('ujian');
        return $this->db->affected_rows();
    }
}
