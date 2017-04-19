<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
		}

	public function surat_kelakuan_baik()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_kelakuan_baik',$data);
	}

	public function surat_keterangan_lahir()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_keterangan_lahir',$data);
	}

	public function surat_pengantar_ktp()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_pengantar_ktp',$data);
	}

	public function surat_pengantar_kk()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_pengantar_kk',$data);
	}

	public function surat_pengantar_domisili()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_pengantar_domisili',$data);
	}

	public function surat_keterangan_pindah()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_keterangan_pindah',$data);
	}

	public function surat_keterangan_pas_jalan()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_keterangan_pas_jalan',$data);
	}

	public function surat_keterangan_usaha()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_keterangan_usaha',$data);
	}

	public function surat_pengesahan_riwayat_hidup()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_pengesahan_riwayat_hidup',$data);
	}

	public function surat_pengesahan_kredit_bank()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->template->template('surat/surat_pengesahan_kredit_bank',$data);
	}


	
}
