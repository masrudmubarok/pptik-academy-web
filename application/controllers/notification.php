<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -  
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */

  public function __construct()
  {
    parent::__construct();
    $params = array('server_key' => 'SB-Mid-server-79duqbA6C1q089RKxU6J-wDP', 'production' => false);
    $this->load->library('veritrans');
    $this->veritrans->config($params);
    $this->load->helper('url');
  }

  public function index()
  {
    echo 'test notification handler';
    $json_result = file_get_contents('php://input');
    $result = json_decode($json_result, "true");

    $order_id = $result['order_id'];
    $data = [
      'transaction_status' => $result['transaction_status']
    ];
    if ($result['transaction_status'] == 'settlement') {
      $this->db->update('ambil_kursus', $data, array('order_id' => $order_id));
    }
  }
}
