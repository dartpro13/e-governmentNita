<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	function __construct(){
		parent::__construct();
			$this->load->model("m_input");
		}



	public function input_penduduk(){
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$j_kelamin=$this->input->post('j_kelamin');
		$agama=$this->input->post('agama');
		$tmp_lahir=$this->input->post('tmp');
		$tgl=$this->input->post('tgl');
		$status=$this->input->post('status');
		$kwn=$this->input->post('kwn');
		$alamat=$this->input->post('alamat');
		$pekerjaan=$this->input->post('pekerjaan');

			$data= array('nik' => $nik,
				'nama' => $nama,
				'j_kelamin' => $j_kelamin,
				'agama' => $agama,
				'tmp_lahir' => $tmp_lahir,
				'tgl_lahir' => $tgl,
				'alamat' => $alamat,
				'status_perkawinan' => $status,
				'kewarganegaraan' => $kwn,
				'pekerjaan' => $pekerjaan
				);

			$query=$this->m_input->insert('tb_penduduk',$data);
			$data['penduduk']=$this->m_input->get('tb_penduduk');
			$this->template->template('table/data_penduduk');
	}

	public function input_pegawai(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$no_hp=$this->input->post('nohp');
		$jabatan=$this->input->post('jabatan');
		$alamat=$this->input->post('alamat');

			$data= array('nip' => $nip,
				'password' => md5($password),
				'no_hp' => $no_hp,
				'nama' => $nama,
				'jabatan' => $jabatan,
				'alamat' => $alamat
				);

			$query=$this->m_input->insert('tb_pegawai',$data);
			$data['pegawai']=$this->m_input->get('tb_pegawai');
			$this->template->template('table/data_pegawai',$data);
	}



	public function delete($id){
		$this->m_input->delete('tb_surat_kelakuan_baik','id_surat',$id);
		$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
		$this->template->template('table/surat_kelakuan_baik',$data);
	}

	public function delete_pembelian($id){
		$this->m_input->delete('pembelian','no_pembelian',$id);

		$data['pembelian']=$this->m_input->get('pembelian');
		foreach ($data['pembelian'] as $key => $value) {
			$data['cekpetani']=$this->m_input->getwhereid('petani','kd_petani',$value->kd_petani);

			foreach ($data['cekpetani'] as $value) {
				echo $data['nama_petani']=$value->nm_petani;
			}

		}

		$this->template->template('table/data_pembelian',$data);
	}

	public function pegawai(){
		$kd_pegawai=$this->input->post('kd_pegawai');
		$nama=$this->input->post('nama');
		$upah=$this->input->post('upah');
		$alamat=$this->input->post('alamat');

			$data= array('kd_pegawai' => $kd_pegawai,
				'kd_upah' => $upah,
				'nm_pegawai' => $nama,
				'alamat' => $alamat
				);

			$query=$this->m_input->insert('pegawai',$data);
			$this->template->template('tables/data_pegawai');
	}

	public function delete_pegawai($id){
		$this->m_input->delete('pegawai','kd_pegawai',$id);

		$data['pegawai']=$this->m_input->get('pegawai');
		foreach ($data['pegawai'] as $key => $value) {
			$data['cekupah']=$this->m_input->getwhereid('upah','kd_upah',$value->kd_upah);

			foreach ($data['cekupah'] as $value) {
				$data['tarif']=$value->tarif;
				$data['bagian']=$value->bagian;
				$data['satuan']=$value->satuan;
			}

		}

		$this->template->template('table/data_pegawai',$data);
	}

	public function petani(){
		$kd_petani=$this->input->post('kd_petani');
		$nama=$this->input->post('nama');
		$no_telp=$this->input->post('no_telp');
		$alamat=$this->input->post('alamat');

			$data= array('kd_petani' => $kd_petani,
				'nm_petani' => $nama,
				'alamat_petani' => $alamat,
				'tlp_petani' => $no_telp
				);

			$query=$this->m_input->insert('petani',$data);
			$this->template->template('tables/data_petani');
	}

	public function delete_petani($id){
		$this->m_input->delete('petani','kd_petani',$id);

		$data['petani']=$this->m_input->get('petani');

		$this->template->template('table/data_petani',$data);
	}

	public function surat_kelakuan_baik(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_kelakuan_baik',$data);

	}



	public function simpan_surat_kelakuan_baik(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_kelakuan_baik',$data);
			$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_kelakuan_baik',$data);
	}

	public function surat_keterangan_lahir(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$data['data_penduduk']=$this->m_input->get('tb_penduduk');
			$this->template->template('surat/form_surat_keterangan_lahir',$data);

	}

	public function simpan_surat_keterangan_lahir(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik_pengaju=$this->input->post('nik_pengaju');
		$nik_ayah=$this->input->post('nik_ayah');
		$nik_ibu=$this->input->post('nik_ibu');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik_pengaju' => $nik_pengaju,
				'nik_ayah' => $nik_ayah,
				'nik_ibu' => $nik_ibu,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_lahir',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_lahir');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik_pengaju);
					$data['ayah']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik_ayah);
					$data['ibu']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik_ibu);
				}


			$this->template->template('table/surat_keterangan_lahir',$data);
	}

	public function surat_pengantar_ktp(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengantar_ktp',$data);

	}

	public function simpan_surat_pengantar_ktp(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_pengantar_ktp',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengantar_ktp',$data);
	}

	public function surat_pengantar_kk(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengantar_kk',$data);

	}

	public function simpan_surat_pengantar_kk(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_pengantar_kk',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengantar_kk');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengantar_kk',$data);
	}

	public function surat_pengantar_domisili(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengantar_domisili',$data);

	}

	public function simpan_surat_pengantar_domisili(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_pengantar_domisili',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengantar_domisili');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengantar_domisili',$data);
	}

	public function surat_keterangan_pindah(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_keterangan_pindah',$data);

	}

	public function simpan_surat_keterangan_pindah(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_pindah',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_pindah');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_keterangan_pindah',$data);
	}

	public function surat_keterangan_pas_jalan(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_keterangan_pas_jalan',$data);

	}

	public function simpan_surat_keterangan_pas_jalan(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_pas_jalan',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_pas_jalan');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_keterangan_pas_jalan',$data);
	}

	public function surat_keterangan_usaha(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_keterangan_usaha',$data);

	}

	public function simpan_surat_keterangan_usaha(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_usaha',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_usaha');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_keterangan_usaha',$data);
	}

	public function surat_pengesahan_riwayat_hidup(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengesahan_riwayat_hidup',$data);

	}

	public function simpan_surat_pengesahan_riwayat_hidup(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_pengesahan_riwayat_hidup',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengesahan_riwayat_hidup');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengesahan_riwayat_hidup',$data);
	}

	public function surat_pengesahan_kredit_bank(){

		$nik=$this->input->post('nama');

			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengesahan_kredit_bank',$data);

	}

	public function simpan_surat_pengesahan_kredit_bank(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_pengesahan_kredit_bank',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengesahan_kredit_bank');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengesahan_kredit_bank',$data);
	}


}
