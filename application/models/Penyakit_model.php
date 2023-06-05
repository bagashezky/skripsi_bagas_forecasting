<?php
class Penyakit_model extends CI_model
{
    public function get_all_penyakit()
    {
        $this->db->select('*');
        $this->db->from('m_penyakit');
        return $this->db->get()->result_array();
    }
    public function get_penyakit_byid($id)
    {
        return $this->db->get_where('m_penyakit', array('id_penyakit' =>  $id))->row_array();
    }
    public function update_penyakit($penyakit,$id_penyakit)
    {
        
        $this->db->set('penyakit',$penyakit);
        $this->db->where('id_penyakit',$id_penyakit);
        $this->db->update('m_penyakit');
    }
    public function hps_penyakit($id)
    {
        $this->db->where('id_penyakit', $id);
        $this->db->delete('m_penyakit');
    }   
    public function add_penyakit($penyakit)
    {
        $data = array(
            'id_penyakit'    => "",
            'penyakit'    => $penyakit
           
        );
 
        $this->db->insert('m_penyakit', $data);
    }   
}