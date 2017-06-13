<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

	function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
			//$this->load->library("template");
        if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		}
	

	public function data_penduduk(){
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		$this->template->template('table/data_penduduk',$data);
	}

	public function data_pegawai(){
		$data['pegawai']=$this->m_input->get('tb_pegawai');
		$this->template->template('table/data_pegawai',$data);
	}

	public function laporan(){
		$data['dana_masuk']=$this->m_input->get('tb_dana_terima');
		$data['dana_keluar']=$this->m_input->get('tb_data_saldo');
		$this->template->template('table/laporan',$data);
	}

	public function data_surat_kelakuan_baik(){
		$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
		$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_kelakuan_baik',$data);
	}

	public function data_surat_keterangan_lahir(){
		$data['surat']=$this->m_input->get('tb_surat_keterangan_lahir');
		$data['surat']=$this->m_input->get('tb_surat_keterangan_lahir');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik_pengaju);
					
				}

			$this->template->template('table/surat_keterangan_lahir',$data);
	}

	public function data_surat_pengantar_ktp(){
		$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
		$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_pengantar_ktp',$data);
	}
    public function data_surat_masuk(){
		$data['surat']=$this->m_input->get('tb_surat_masuk');
		$data['surat']=$this->m_input->get('tb_surat_masuk');
				foreach ($data['surat'] as $value) {
//					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_masuk',$data);
	}
public function data_surat_online(){
		$data['surat']=$this->m_input->get('tb_online');
				foreach ($data['surat'] as $value) {
					$data['file']=$this->m_input->getwhereid('tb_file_persyaratan','valid_code',$value->valid_code);
				}

			$this->template->template('table/surat_online',$data);
	}
    public function data_surat_keluar(){
		$data['spkk']=$this->m_input->get('tb_surat_pengantar_kk');
		$data['spktp']=$this->m_input->get('tb_surat_pengantar_ktp');
		$data['spd']=$this->m_input->get('tb_surat_pengantar_domisili');
		$data['skp']=$this->m_input->get('tb_surat_keterangan_pindah');
		$data['skpj']=$this->m_input->get('tb_surat_keterangan_pas_jalan');
		$data['sku']=$this->m_input->get('tb_surat_keterangan_usaha');
		$data['sprh']=$this->m_input->get('tb_surat_pengesahan_riwayat_hidup');
		$data['spkb']=$this->m_input->get('tb_surat_pengesahan_kredit_bank');
		$data['skl']=$this->m_input->get('tb_surat_keterangan_lahir');
		$data['skb']=$this->m_input->get('tb_surat_kelakuan_baik');
        

			$this->template->template('table/surat_keluar',$data);
	}

	public function data_surat_pengantar_kk(){
		$data['surat']=$this->m_input->get('tb_surat_pengantar_kk');
		$data['surat']=$this->m_input->get('tb_surat_pengantar_kk');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_pengantar_kk',$data);
	}

	public function data_surat_pengantar_domisili(){
		$data['surat']=$this->m_input->get('tb_surat_pengantar_domisili');
		$data['surat']=$this->m_input->get('tb_surat_pengantar_domisili');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_pengantar_domisili',$data);
	}

	public function data_surat_keterangan_pindah(){
		$data['surat']=$this->m_input->get('tb_surat_keterangan_pindah');
		$data['surat']=$this->m_input->get('tb_surat_keterangan_pindah');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_keterangan_pindah',$data);
	}

	public function data_surat_keterangan_pas_jalan(){
		$data['surat']=$this->m_input->get('tb_surat_keterangan_pas_jalan');
		$data['surat']=$this->m_input->get('tb_surat_keterangan_pas_jalan');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_keterangan_pas_jalan',$data);
	}

	public function data_surat_keterangan_usaha(){
		$data['surat']=$this->m_input->get('tb_surat_keterangan_usaha');
		$data['surat']=$this->m_input->get('tb_surat_keterangan_usaha');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_keterangan_usaha',$data);
	}

	public function data_surat_keterangan_riwayat_hidup(){
		$data['surat']=$this->m_input->get('tb_surat_pengesahan_riwayat_hidup');
		$data['surat']=$this->m_input->get('tb_surat_pengesahan_riwayat_hidup');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_pengesahan_riwayat_hidup',$data);
	}

	public function data_pengesahan_kredit_bank(){
		$data['surat']=$this->m_input->get('tb_surat_pengesahan_kredit_bank');
		$data['surat']=$this->m_input->get('tb_surat_pengesahan_kredit_bank');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_pengesahan_kredit_bank',$data);
	}
    


	
}
