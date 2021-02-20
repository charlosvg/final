<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Kota extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('kota_model');
  }
  public function kotadetail_get()
  {
    $where = '';
    if (null !== $this->get('ID')) {
      $kota_indah = $this->get('ID');
      $where ="ID LIKE '" . $kota_indah ."'";
    }
    $data = $this->kota_model->kotadetail($where);
    $this->response( ['kotaDetail'=> $data], 200);
  }
}

?>
