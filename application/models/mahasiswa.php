<?php
class mahasiswa extends CI_Model
{
public function getAllUser()
{
return $this->db->get('siswa')->result_array();
}

public function inputData()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "agama" => $this->input->post('agama', true)
        ];
        $this->db->insert('siswa', $data);
    }
}