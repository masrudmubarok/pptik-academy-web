<?php
class Dashboard_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function sum_pemasukan()
  {
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function sum_pengeluaran()
  {
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function get_saldo()
  {
    $sql = "SELECT sum(pemasukan)-sum(pengeluaran) as saldo FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->saldo;
  }
}
