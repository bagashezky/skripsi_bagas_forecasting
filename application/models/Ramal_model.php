<?php
class Ramal_model extends CI_model
{
    public function get_Ramal()
    {
        $this->db->select('*');
        $this->db->from('ramal_masadepan');
        return $this->db->get()->result_array();
    }
    public function add_ramal($id_penyakit,$tahun,$bulan,$jumlah_penyakit)
    {
        $data = array(
            'id_ramal_masadepan'    => "",
            'id_penyakit'    => $id_penyakit,
            'tahun'    => $tahun,
            'bulan'    => $bulan,
            'jumlah_penyakit'    => $jumlah_penyakit
        );
 
        $this->db->insert('ramal_masadepan', $data);
    }  
}