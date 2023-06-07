<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
        $this->load->model('Penyakit_model');
        $this->load->model('Datapenyakit_model');
		is_logged_in();
    }
	public function index()
	{
		$data['nama'] = "Data Penyakit";
		$id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
		$data['data_penyakit']=$this->Penyakit_model->get_all_penyakit();
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/leftmenu.php',$data);
        $this->load->view('penyakit/index.php',$data);
        $this->load->view('Templates/footer.php',$data);
	}
	public function detail($id)
	{
		// $data['nama'] = "Data Kecamatan";
		$data['data_penyakit']=$this->Datapenyakit_model->get_all_data_penyakit($id);
		$id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
		$data['dt_penyakit'] = $this->Kecamatan_model->get_kecamatan_byid($id);
		$data['nama'] = $data['dt_penyakit']['kecamatan'];
		
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/leftmenu.php',$data);
        $this->load->view('perkecamatan/index.php',$data);
        $this->load->view('Templates/footer.php',$data);
	}
	public function edit($id)
	{
		$data['nama'] = "Edit Data Penyakit";
		
		$data['data_penyakit_id']=$this->Penyakit_model->get_penyakit_byid($id);
		$id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
		$this->form_validation->set_rules('penyakit', 'Penyakit', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('Templates/header.php',$data);
			$this->load->view('Templates/navbar.php',$data);
			$this->load->view('Templates/leftmenu.php',$data);
			$this->load->view('penyakit/penyakit_edit.php',$data);
			$this->load->view('Templates/footer.php',$data);
			}
			else{
				$this->e();
			}
	}
	public function e(){
		$penyakit =$this->input->post('penyakit', true);
		$id_penyakit =$this->input->post('id_penyakit', true);
		
		// echo($id_penyakit);
		// echo($kecamatan);
		$this->db->set('penyakit',$penyakit);
        $this->db->where('id_penyakit',$id_penyakit);
        $this->db->update('m_penyakit');
		$this->session->set_flashdata('flash', 'Diupdate');
		$this->session->set_flashdata('data', 'Penyakit');
		redirect('penyakit');
	}
	public function tambah()
	{
		$data['nama'] = "Tambah Data Kecamatan";
		$data['data_penyakit']=$this->Penyakit_model->get_all_penyakit();
		$id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
		$this->form_validation->set_rules('penyakit', 'Penyakit', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/leftmenu.php',$data);
        $this->load->view('penyakit/penyakit_add.php',$data);
		$this->load->view('Templates/footer.php',$data);
		}else{
			$penyakit =$this->input->post('penyakit', true);
		
			$this->Penyakit_model->add_penyakit($penyakit);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			$this->session->set_flashdata('data', 'penyakit');
			redirect('penyakit');
		}
	}
	
	public function tambahair($id)
	{
		$data['dt_penyakit'] = $this->Kecamatan_model->get_kecamatan_byid($id);
		$data['nama'] = $data['dt_penyakit'];
		$data['dkc'] = $data['dt_penyakit']['id_penyakit'];
		$id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/leftmenu.php',$data);
        $this->load->view('perkecamatan/perkec_add.php',$data);
		$this->load->view('Templates/footer.php',$data);
		}
	}
	public function saveair()
	{
		// $id_data_penyakit =$this->input->post('id_data_penyakit', true);
		$id_penyakit=$this->input->post('id_penyakit', true);
		$bulan_tahun=date($this->input->post('bulan_tahun', true));
		$jumlah_air=date($this->input->post('jumlah_air', true));
		$bulan=date("m",strtotime($bulan_tahun));
		$tahun=date("Y",strtotime($bulan_tahun));
		$jumlah_air=$this->input->post('jumlah_air', true);
		
		$this->Dataair_model->add_data_penyakit($id_penyakit,$bulan,$tahun,$jumlah_air);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('data', 'Data air');
		$url='Kecamatan/detail/'.$id_penyakit;
		redirect($url);
	}
	public function hapus($id)
	{
		$this->Penyakit_model->hps_penyakit($id);
		$this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Penyakit');
        redirect('penyakit');
	}
	public function hapusair($id)
	{
		$idkc=$this->Dataair_model->get_id_kec_byair($id);
		$id_penyakit=$idkc[0]['id_penyakit'];
		$this->Dataair_model->hps_data_penyakit($id);
		$this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Data air');
		$url='Kecamatan/detail/'.$id_penyakit;
		redirect($url);
	}
}