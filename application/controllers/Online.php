<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author NVM Team Creative
 */
class Online extends CI_Controller {
    //put your code here
var $assets;
var $css;
var $js;
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
	public function __construct()

	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->assets=base_url().'assets/';
		$this->css=base_url().'assets/css/';
		$this->js=base_url().'assets/js/';
    $this->load->model("m_input");
        $this->asset='https://www.kantordesa-banjar.com/assets/online/';
		//$this->load->model('m_data');
	}
	public function index()
	{
        $data['title']='Kantor Desa Banjar';
		$data['assets']=$this->asset;
        $data['info']=$this->load->view('online/template/head-info',$data,true);
        $data['nav']=$this->load->view('online/template/head-nav',$data,true);
        $data['intro']=$this->load->view('online/template/body-section-intro',$data,true);
        $data['about']=$this->load->view('online/template/body-section-about',$data,true);
        $data['foot']=$this->load->view('online/template/foot',$data,true);
		$this->load->view('online/index',$data);
	}
  public function set_nomor_surat($kodeSurat)
  {
    $data['title']='Online';
    $data['kodeSurat']=$kodeSurat;
    $data['tanggal']=date('d');
    $data['bulan']=date('m');
    $data['tahun']=date('Y');
    $data['jam']=date('H');
    $data['menit']=date('i');
    $this->load->view('Online/set_nomor_surat',$data);
  }
	public function surat_kelakuan_baik()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_kelakuan_baik',$data);
	}
	public function surat_keterangan_lahir()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_keterangan_lahir',$data);
	}
	public function surat_keterangan_usaha()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_keterangan_usaha',$data);
	}
	public function surat_keterangan_pindah()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_keterangan_pindah',$data);
	}
	public function surat_keterangan_domisili()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_keterangan_domisili',$data);
	}
	public function surat_keterangan_pas_jalan()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_keterangan_pas_jalan',$data);
	}
	public function surat_pengantar_kk()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_pengantar_kk',$data);
	}
	public function surat_pengantar_ktp()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_pengantar_ktp',$data);
	}
	public function surat_pengesahan_kredit_bank()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_pengesahan_kredit_bank',$data);
	}
	public function surat_pengesahan_riwayat_hidup()
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('Online/surat_pengesahan_riwayat_hidup',$data);
	}
	public function proses_surat_kelakuan_baik(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_kelakuan_baik',$data);

	}
  public function simpan_surat_kelakuan_baik(){
        $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_kelakuan_baik',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);
      
            $nama=$this->input->post('nama');
            $jabatan=$this->input->post('jabatan');
            $keperluan=$this->input->post('keperluan');
            $nomor_hp=$this->input->post('nomor_hp');
			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
            $online= array('jenis_surat'=>'surat_kelakuan_baik',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);
			$this->m_input->insert('tb_surat_kelakuan_baik',$data);
			$data['surat']=$this->m_input->get('tb_surat_kelakuan_baik');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
        }
		
	}
	public function proses_surat_keterangan_lahir(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_keterangan_lahir',$data);

	}
    public function simpan_surat_keterangan_lahir(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_keterangan_lahir',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_keterangan_lahir',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);
			$this->m_input->insert('tb_surat_keterangan_lahir',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_lahir');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
    }
	public function proses_surat_pengantar_ktp(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_pengantar_ktp',$data);

	}
  public function simpan_surat_pengantar_ktp(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_pengantar_ktp',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_pengantar_ktp',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);
			$this->m_input->insert('tb_surat_pengantar_ktp',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengantar_ktp');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
  }
	public function proses_pengantar_kk(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_pengantar_kk',$data);

	}
  public function simpan_surat_pengantar_kk(){
	$config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_pengantar_kk',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      $nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
            $online= array('jenis_surat'=>'surat_pengantar_kk',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_pengantar_kk',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengantar_kk');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_keterangan_domisili(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_keterangan_domisili(',$data);

	}
  public function simpan_surat_keterangan_domisili(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_keterangan_domisili',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
            $online= array('jenis_surat'=>'surat_keterangan_domisili',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);


			$this->m_input->insert('tb_surat_keterangan_domisili',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_domisili');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_keterangan_pindah(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_keterangan_pindah',$data);

	}
  public function simpan_surat_keterangan_pindah(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_keterangan_pindah',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_keterangan_pindah',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_keterangan_pindah',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_pindah');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_keterangan_pas_jalan(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_keterangan_pas_jalan',$data);

	}
  public function simpan_surat_keterangan_pas_jalan(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_keterangan_pas_jalan',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_keterangan_pas_jalan',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_keterangan_pas_jalan',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_pas_jalan');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_keterangan_usaha(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_keterangan_usaha',$data);

	}
  public function simpan_surat_keterangan_usaha(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_keterangan_usaha',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_keterangan_usaha',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_keterangan_usaha',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_usaha');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_pengesahan_riwayat_hidup(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_pengesahan_riwayat_hidup',$data);

	}
  public function simpan_surat_pengesahan_riwayat_hidup(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_pengesahan_riwayat_hidup',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_pengesahan_riwayat_hidup',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_pengesahan_riwayat_hidup',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengesahan_riwayat_hidup');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

	public function proses_surat_pengesahan_kredit_bank(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('Online/form_surat_pengesahan_kredit_bank',$data);

	}
  public function simpan_surat_pengesahan_kredit_bank(){
      $config['upload_path'] = './file/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '100000'; //in kb
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';
        $this->upload->initialize($config);
        $jam=date('H');
        $nik=$this->input->post('nik');
        $valid_code=$jam.''.$nik;    
        
        if ( ! $this->upload->do_upload('berkas')){
            $data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/index',$data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => 'surat_pengesahan_kredit_bank',
                                'valid_code'=>$valid_code
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);	
      
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);
$online= array('jenis_surat'=>'surat_pengesahan_kredit_bank',
                          'nik_pembuat'=>$nik,
                          'keperluan'=>$keperluan,
                          'no_hp'=>$nomor_hp,
                          'status'=>'sedang di proses',
                                'valid_code'=>$valid_code);
            $this->m_input->insert('tb_online',$online);

			$this->m_input->insert('tb_surat_pengesahan_kredit_bank',$data);
			$data['surat']=$this->m_input->get('tb_surat_pengesahan_kredit_bank');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			$data['title']='Online';
            $data['images']=base_url().'assets/images/surat.png';
			$data['message'] =  'klik <a href="">finish</a> untuk menyelesaikan permintaan';
			$this->load->view('Online/index',$data);
	}
	}

}
