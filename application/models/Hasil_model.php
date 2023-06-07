<?php
class Hasil_model extends CI_model
{
    public function get_hitung($id)
    {
        $this->db->select('*');
        
        $this->db->from('data_penyakit');
        
        $this->db->join('m_penyakit', 'data_penyakit.id_penyakit = m_penyakit.id_penyakit', 'left');
        $this->db->join('hitung', 'data_penyakit.id_data_penyakit = hitung.id_data_penyakit', 'left');
        $this->db->where('data_penyakit.id_penyakit',  $id);
       

        return $this->db->get()->result_array();
    }
    public function get_at($id)
    {
        $this->db->select('jumlah_penyakit');
        
        $this->db->from('data_penyakit');
        
        $this->db->join('m_penyakit', 'data_penyakit.id_penyakit = m_penyakit.id_penyakit', 'left');
        $this->db->join('hitung', 'data_penyakit.id_data_penyakit = hitung.id_data_penyakit', 'left');
        $this->db->where('data_penyakit.id_penyakit',  $id);
        // $this->db->where('hasil_forecast !=',  '');
        return $this->db->get()->result_array();
    }
    public function get_ft($id)
    {
        $this->db->select('hasil_forecast');
        
        $this->db->from('data_penyakit');
        
        $this->db->join('m_penyakit', 'data_penyakit.id_penyakit = m_penyakit.id_penyakit', 'left');
        $this->db->join('hitung', 'data_penyakit.id_data_penyakit = hitung.id_data_penyakit', 'left');
        $this->db->where('data_penyakit.id_penyakit',  $id);
        // $this->db->where('hasil_forecast !=',  '');
        return $this->db->get()->result_array();
    }
    public function get_mape($id)
    {
        $sum="SELECT SUM(abs_at_ft_bagiat) as total FROM hitung NATURAL JOIN data_penyakit WHERE id_penyakit=$id";    
        $query1 = $this->db->query($sum);
        $sumabs=  (double) $query1->row_array()['total'];
        $carin="SELECT COUNT(abs_at_ft_bagiat) as n FROM hitung NATURAL JOIN data_penyakit WHERE id_penyakit=$id";
        $query2 = $this->db->query($carin);
        $n=  (integer) $query2->row_array()['n'];
        if ($n==0){
            
            $MAPE=0;
        }else{
            $MAPE=(100/$n)*$sumabs;
        }
       
        return $MAPE;
    }
    public function get_masa_depan($id)
    {
        $this->db->select('*');
        
        $this->db->from('ramal_masadepan');
        
        $this->db->join('m_penyakit', 'ramal_masadepan.id_penyakit = m_penyakit.id_penyakit', 'left');
      
        $this->db->where('ramal_masadepan.id_penyakit',  $id);
        return $this->db->get()->result_array();
    }
    public function get_label_bawah($id)
    {
        $this->db->select('bulan');
        
        $this->db->from('data_penyakit');

        $this->db->where('id_penyakit',  $id);
        return $this->db->get()->result_array();
    }
}