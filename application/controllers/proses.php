<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	function __construct(){
		parent::__construct();
			$this->load->model("m_input");
            $this->load->helper('url');
            $this->load->helper("file");
            $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
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
		if($this->input->post('rt')!=""){
            $rt='RT. '.$this->input->post('rt');
        }else{
            $rt='RT.-';
        }
        if($this->input->post('rw')!=""){
            $rw='RW. '.$this->input->post('rw');
        }else{
            $rw='RW.-';
        }
        if($this->input->post('kecamatan')!=""){
            $kecamatan='Kecamatan: '.$this->input->post('kecamatan');
        }else{
            $kecamatan='Kecamatan: -';
        }
        if($this->input->post('kabupaten')!=""){
            $kabupaten='Kabupaten:  '.$this->input->post('kabupaten');
        }else{
            $kabupaten='Kabupaten: -';
        }
        if($this->input->post('provinsi')!=""){
            $provinsi='Kabupaten:  '.$this->input->post('provinsi');
        }else{
            $provinsi='Provinsi: -';
        }
		$alamat_lengkap=$alamat.' '.$rt.' '.$rw.' '.$kecamatan.' '.$kabupaten.' '.$provinsi;

			$data= array('nik' => $nik,
				'nama' => $nama,
				'j_kelamin' => $j_kelamin,
				'agama' => $agama,
				'tmp_lahir' => $tmp_lahir,
				'tgl_lahir' => $tgl,
				'alamat' => $alamat_lengkap,
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

        if($this->input->post('rt')!=""){
            $rt='RT. '.$this->input->post('rt');
        }else{
            $rt='RT.-';
        }
        if($this->input->post('rw')!=""){
            $rw='RW. '.$this->input->post('rw');
        }else{
            $rw='RW.-';
        }
        if($this->input->post('kecamatan')!=""){
            $kecamatan='Kecamatan: '.$this->input->post('kecamatan');
        }else{
            $kecamatan='Kecamatan: -';
        }
        if($this->input->post('kabupaten')!=""){
            $kabupaten='Kabupaten:  '.$this->input->post('kabupaten');
        }else{
            $kabupaten='Kabupaten: -';
        }
        if($this->input->post('provinsi')!=""){
            $provinsi='Kabupaten:  '.$this->input->post('provinsi');
        }else{
            $provinsi='Provinsi: -';
        }
		$alamat_lengkap=$alamat.' '.$rt.' '.$rw.' '.$kecamatan.' '.$kabupaten.' '.$provinsi;

			$data= array('nip' => $nip,
				'password' => md5($password),
				'no_hp' => $no_hp,
				'nama' => $nama,
				'jabatan' => $jabatan,
				'alamat' => $alamat_lengkap
				);

			$query=$this->m_input->insert('tb_pegawai',$data);
			$data['pegawai']=$this->m_input->get('tb_pegawai');
			$this->template->template('table/data_pegawai',$data);
	}

	public function surat_kelakuan_baik(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_kelakuan_baik',$data);

	}

	public function edit_surat_kelakuan_baik($id){
			$data['surat']=$this->m_input->getwhereid('tb_surat_kelakuan_baik','id_surat',$id);
			foreach ($data['surat'] as $row) {
				$nik = $row->nik;
				$keperluan = $row->keperluan;
				$namaSurat = $row->nama;
			}
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$data['status']="edit";
			$data['keperluan']=$keperluan;
			$data['idS']=$id;
			$data['namaSurat']=$namaSurat;
			$this->template->template('surat/form_surat_kelakuan_baik',$data);
	}
	public function edit_surat_kelakuan_baik_act($id){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

		$data= array($nama,
			$jabatan,
			$nik,
			$keperluan
			);
			$set= array('nama = '.'"'.$nama.'"',
				'jabatan = '.'"'.$jabatan.'"',
				'nik = '.'"'.$nik.'"',
				'keperluan = '.'"'.$keperluan.'"'
				);
				$arrlength=count($set);
				$x=0;
				while($x<$arrlength) {
						$this->m_input->updateNew('tb_surat_kelakuan_baik',$set[$x],'id_surat',$id);
						$x++;
				}

			$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_kelakuan_baik',$data);
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
	public function edit_surat_keterangan_lahir($id){
			$data['surat']=$this->m_input->getwhereid('tb_surat_keterangan_lahir','id_surat',$id);
			foreach ($data['surat'] as $row) {
				$nik = $row->nik;
				$keperluan = $row->keperluan;
				$namaSurat = $row->nama;
			}
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$data['status']="edit";
			$data['keperluan']=$keperluan;
			$data['idS']=$id;
			$data['namaSurat']=$namaSurat;
			$this->template->template('surat/form_surat_keterangan_lahir',$data);
	}
	public function edit_surat_keterangan_lahir_act($id){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

		$data= array($nama,
			$jabatan,
			$nik,
			$keperluan
			);
			$set= array('nama = '.'"'.$nama.'"',
				'jabatan = '.'"'.$jabatan.'"',
				'nik = '.'"'.$nik.'"',
				'keperluan = '.'"'.$keperluan.'"'
				);
				$arrlength=count($set);
				$x=0;
				while($x<$arrlength) {
						$this->m_input->updateNew('tb_surat_kelakuan_baik',$set[$x],'id_surat',$id);
						$x++;
				}

			$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_kelakuan_baik',$data);
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
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->template->template('surat/form_surat_pengantar_ktp',$data);

	}
	

	public function edit_surat_pengantar_ktp($id){
			$data['surat']=$this->m_input->getwhereid('tb_surat_pengantar_ktp','id_surat',$id);
			foreach ($data['surat'] as $row) {
				$nik = $row->nik;
				$keperluan = $row->keperluan;
				$namaSurat = $row->nama;
			}
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$data['status']="edit";
			$data['keperluan']=$keperluan;
			$data['idS']=$id;
			$data['namaSurat']=$namaSurat;
			$this->template->template('surat/form_surat_pengantar_ktp',$data);
	}
	public function edit_surat_pengantar_ktp_act($id){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

		$data= array($nama,
			$jabatan,
			$nik,
			$keperluan
			);
			$set= array('nama = '.'"'.$nama.'"',
				'jabatan = '.'"'.$jabatan.'"',
				'nik = '.'"'.$nik.'"',
				'keperluan = '.'"'.$keperluan.'"'
				);
				$arrlength=count($set);
				$x=0;
				while($x<$arrlength) {
						$this->m_input->updateNew('tb_surat_pengantar_ktp',$set[$x],'id_surat',$id);
						$x++;
				}

			$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengantar_ktp',$data);
	}
    public function edit_surat_masuk($id){
			$data['surat']=$this->m_input->getwhereid('tb_surat_masuk','no_surat',$id);
			foreach ($data['surat'] as $row) {
				$pengirim = $row->pengirim;
				$perihal = $row->perihal;
				$tgl_surat = $row->tgl_surat;
				$no_surat = $row->file;
				$tgl_surat = $row->tgl_surat;
                $ditujukan = $row->ditujukan;
			}
//			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$data['status']="edit";
//			$data['keperluan']=$keperluan;
			$data['idS']=$id;
//			$data['namaSurat']=$namaSurat;
			$this->template->template('form/input_surat_masuk',$data);
	}
	public function edit_surat_masuk_act($id){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

		$data= array($nama,
			$jabatan,
			$nik,
			$keperluan
			);
			$set= array('nama = '.'"'.$nama.'"',
				'jabatan = '.'"'.$jabatan.'"',
				'nik = '.'"'.$nik.'"',
				'keperluan = '.'"'.$keperluan.'"'
				);
				$arrlength=count($set);
				$x=0;
				while($x<$arrlength) {
						$this->m_input->updateNew('tb_surat_pengantar_ktp',$set[$x],'id_surat',$id);
						$x++;
				}

			$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}


			$this->template->template('table/surat_pengantar_ktp',$data);
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
    public function simpan_surat_masuk(){
		$nama=$this->input->post('nama');
		$nomor_surat=$this->input->post('nomor_surat');
		$perihal=$this->input->post('perihal');
		$tgl=$this->input->post('tgl');
		$jabatan=$this->input->post('jabatan');
		$pengirim=$this->input->post('pengirim');
		$ditujukan=$this->input->post('ditujukan');

			$data= array('pengirim' => $pengirim,
				'ditujukan' => $ditujukan,
				'tgl_surat' => $tgl,
				'perihal' => $perihal,
				'file' => $nomor_surat,
				'nip' => 52352
				);

			$this->m_input->insert('tb_surat_masuk',$data);
            $data['surat']=$this->m_input->get('tb_surat_masuk');
				foreach ($data['surat'] as $value) {
//					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}

			$this->template->template('table/surat_masuk',$data);
	}
    
    function import_penduduk(){
	$fileNam = time().$_FILES['data_penduduk']['name'];
    $fileName = str_replace(" ", "_", $fileNam);
	        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
	        $config['file_name'] = $fileName;
	        $config['allowed_types'] = 'xls|xlsx|csv';
	        $config['max_size'] = 10000;

	        $this->load->library('upload');
	        $this->upload->initialize($config);

	        if(! $this->upload->do_upload('data_penduduk') )
	        $this->upload->display_errors();

	        $media = $this->upload->data('data_penduduk');
	        $inputFileName = 'assets/'.$config['file_name'];

	        try {
	                $inputFileType = IOFactory::identify($inputFileName);
	                $objReader = IOFactory::createReader($inputFileType);
	                $objPHPExcel = $objReader->load($inputFileName);
	            } catch(Exception $e) {
	                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	            }

	            $sheet = $objPHPExcel->getSheet(0);
	            $highestRow = $sheet->getHighestRow();
	            $highestColumn = $sheet->getHighestColumn();

	            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
	                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
	                                                NULL,
	                                                TRUE,
	                                                FALSE);

	                //Sesuaikan sama nama kolom tabel di database
	                 $data = array(
                         "nik"=> $rowData[0][0],
                         "nama"=> $rowData[0][1],
                         "j_kelamin"=> $rowData[0][2],
                         "agama"=> $rowData[0][3],
                         "tmp_lahir"=> $rowData[0][4],
                         "tgl_lahir"=> $rowData[0][5],
                         "alamat"=> $rowData[0][7],
                         "status_perkawinan"=> $rowData[0][8],
                         "kewarganegaraan"=> $rowData[0][9],
                         "pekerjaan"=> $rowData[0][10],
	                );

	                //sesuaikan nama dengan nama tabel
	                $insert = $this->db->insert("tb_penduduk",$data);
	                delete_files($media['file_path']);

	            }
	        redirect('tables/data_penduduk');
    }


}
