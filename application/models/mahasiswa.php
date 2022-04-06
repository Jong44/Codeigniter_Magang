<?php
class mahasiswa extends CI_Model
{
public function getAllUser()
{
return $this->db->get('siswa')->result_array();
}
}