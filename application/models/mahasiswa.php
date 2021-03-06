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

public function hapusData($nis)
    {
        $this->db->delete('siswa', ['nis' => $nis]);
    }
public function getSiswaByNIS($nis)
    {
        return $this->db->get_where('siswa', ['nis' => $nis])->row_array(); 
    }
public function updateData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "agama" => $this->input->post('agama', true)
        ];
        $this->db->where('nis', $this->input->post('nis'));
        $this->db->update('siswa', $data);
    }
}