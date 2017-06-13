<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
			//$this->load->library("template");
        if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		}
	
	public function index()
	{
        $data['jumlah_penduduk']=$this->m_input->hitung_data('tb_penduduk');
        $data['jumlah_pria']=$this->m_input->hitung_data_laki();
        $data['jumlah_wanita']=$this->m_input->hitung_data_wanita();
        $skb=$this->m_input->hitung_data('tb_surat_kelakuan_baik');
        $skl=$this->m_input->hitung_data('tb_surat_keterangan_lahir');
        $skpj=$this->m_input->hitung_data('tb_surat_keterangan_pas_jalan');
        $skp=$this->m_input->hitung_data('tb_surat_keterangan_pindah');
        $sku=$this->m_input->hitung_data('tb_surat_keterangan_usaha');
        $spd=$this->m_input->hitung_data('tb_surat_pengantar_domisili');
        $spkk=$this->m_input->hitung_data('tb_surat_pengantar_kk');
        $spktp=$this->m_input->hitung_data('tb_surat_pengantar_ktp');
        $spkb=$this->m_input->hitung_data('tb_surat_pengesahan_kredit_bank');
        $sprh=$this->m_input->hitung_data('tb_surat_pengesahan_riwayat_hidup');
        $data['skb']=$this->m_input->hitung_data('tb_surat_kelakuan_baik');
        $data['skl']=$this->m_input->hitung_data('tb_surat_keterangan_lahir');
        $data['skpj']=$this->m_input->hitung_data('tb_surat_keterangan_pas_jalan');
        $data['skp']=$this->m_input->hitung_data('tb_surat_keterangan_pindah');
        $data['sku']=$this->m_input->hitung_data('tb_surat_keterangan_usaha');
        $data['spd']=$this->m_input->hitung_data('tb_surat_pengantar_domisili');
        $data['spkk']=$this->m_input->hitung_data('tb_surat_pengantar_kk');
        $data['spktp']=$this->m_input->hitung_data('tb_surat_pengantar_ktp');
        $data['spkb']=$this->m_input->hitung_data('tb_surat_pengesahan_kredit_bank');
        $data['sprh']=$this->m_input->hitung_data('tb_surat_pengesahan_riwayat_hidup');
        $data['total_surat_keluar']=$skb+$skl+$skpj+$sku+$skp+$spd+$spkk+$spktp+$spkb+$sprh;
        $data['total_surat_masuk']=$sm=$this->m_input->hitung_data('tb_surat_masuk');;
        $data['total_penduduk']=$this->m_input->get('tb_penduduk');
        $data['surat_masuk']=$this->m_input->get('tb_surat_masuk');
		$data['surat_keluar']=$this->m_input->get('tb_surat_keluar');
		$this->template->template('dashboard',$data);
	}
    public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
    
	
}
