<?php
class pembelian_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllPembelian()
    {
        $this->db->select('*');
        $this->db->from('ambil_kursus');
        $this->db->join('siswa', 'ambil_kursus.id_siswa = siswa.id_siswa');
        $this->db->join('kursus', 'ambil_kursus.id_kursus = kursus.id_kursus');
        $this->db->order_by('transaction_time', 'DESC');
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

    public function getPembelianId($id_ambilkursus)
    {
        return $this->db->where('id_ambilkursus', $id_ambilkursus)->get('ambil_kursus')->row();
    }

    public function getPembelianId1($id_ambilkursus)
    {
        $this->db->select('*');
        $this->db->from('ambil_kursus');
        $this->db->join('siswa', 'ambil_kursus.id_siswa = siswa.id_siswa');
        $this->db->join('kursus', 'ambil_kursus.id_kursus = kursus.id_kursus');
        $this->db->where('ambil_kursus.id_ambilkursus', $id_ambilkursus);
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
}
