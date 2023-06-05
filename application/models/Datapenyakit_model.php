<?php
class Datapenyakit_model extends CI_model
{
    public function get_all_data_penyakit($id)
    {
        $this->db->select('*');
        
        $this->db->from('data_penyakit');
        
        $this->db->join('m_penyakit', 'data_penyakit.id_penyakit = m_penyakit.id_penyakit', 'left');
        $this->db->where('m_penyakit.id_penyakit',  $id);
        return $this->db->get()->result_array();
       
    }
    public function get_data_penyakit_byid($id)
    {
        return $this->db->get_where('data_penyakit', array('id_data_penyakit' =>  $id))->row_array();
    }
    public function update_data_penyakit($data_penyakit,$id_data_penyakit)
    {
        
        $this->db->set('data_penyakit',$data_penyakit);
        $this->db->where('id_data_penyakit',$id_data_penyakit);
        $this->db->update('data_penyakit');
    }
    public function hps_data_penyakit($id)
    {
        $this->db->where('id_data_penyakit', $id);
        $this->db->delete('data_penyakit');
    }   
    public function add_data_penyakit($id_penyakit,$bulan,$tahun,$jumlah_penyakit)
    {
        $data = array(
            'id_data_penyakit'    => "",
            'id_penyakit'    => $id_penyakit,
            'bulan'    => $bulan,
            'tahun'    => $tahun,
            'jumlah_penyakit'    => $jumlah_penyakit
        );
 
        $this->db->insert('data_penyakit', $data);
    }
    public function get_id_kec_bypenyakit($id)
    {
        $this->db->select('*');
        
        $this->db->from('data_penyakit');
        
        $this->db->join('m_penyakit', 'data_penyakit.id_penyakit = m_penyakit.id_penyakit', 'left');
        $this->db->where('data_penyakit.id_data_penyakit',  $id);
        return $this->db->get()->result_array();
    }   
}