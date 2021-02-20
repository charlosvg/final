<?php

/**
 *
 */
class Kota_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function kotadetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('kota_indah');
    return $query->result();
  }
}

 ?>
