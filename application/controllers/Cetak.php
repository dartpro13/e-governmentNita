<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
			//$this->load->library("template");
		}
	

	public function laporan(){
		$data['dana_masuk']=$this->m_input->get('tb_dana_terima');
		$data['dana_keluar']=$this->m_input->get('tb_data_saldo');
		$this->load->view('table/cetak_laporan',$data);
	}

	public function suratkelakuanbaik($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_kelakuan_baik','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratkelakuanbaik',$data);
	}

	public function suratpengantarktp($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_pengantar_ktp','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratpengantarktp',$data);
	}

	public function suratpengantarkk($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_pengantar_kk','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratpengantarkk',$data);
	}

	public function suratpengantardomisili($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_pengantar_domisili','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratpengantardomisili',$data);
	}

	public function suratketeranganpindah($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_keterangan_pindah','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratketeranganpindah',$data);
	}

	public function suratketeranganpasjalan($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_keterangan_pas_jalan','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratketeranganpasjalan',$data);
	}

	public function suratketeranganusaha($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_keterangan_usaha','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratketeranganusaha',$data);
	}

	public function suratpengesahanriwayathidup($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_pengesahan_riwayat_hidup','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratpengesahanriwayathidup',$data);
	}

	public function suratpengesahankreditbank($id){
		$data['surat']=$this->m_input->getwhereid('tb_surat_pengesahan_kredit_bank','id_surat',$id);

			foreach ($data['surat'] as $value) {
				$data['user']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);

					foreach ($data['user'] as $user) {
						
					}
			}

			$this->load->view('cetak/suratpengesahankreditbank',$data);
	}

	
}
