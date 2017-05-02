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
class Onsite extends CI_Controller {
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
		//$this->load->model('m_data');
	}
	public function index()
	{
    $data['title']='Onsite';
    $data['images']=base_url().'assets/images/surat.png';
		// $data['assets']=$this->assets;
		// $data['css']=$this->css;
		// $data['js']=$this->js;
    // $data['head']=$this->load->view('admin/head',$data, true);
    // $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
    // $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
    // $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
    // $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
    // $data['content']=$this->load->view('admin/content_dashboard',$data, true);
    // $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('onsite/index',$data);
	}
  public function set_nomor_surat($kodeSurat)
  {
    $data['title']='Onsite';
    $data['kodeSurat']=$kodeSurat;
    $data['tanggal']=date('d');
    $data['bulan']=date('m');
    $data['tahun']=date('Y');
    $data['jam']=date('H');
    $data['menit']=date('i');
    $this->load->view('onsite/set_nomor_surat',$data);
  }
	public function surat_kelakuan_baik($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_kelakuan_baik',$data);
	}
	public function surat_keterangan_lahir($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_keterangan_lahir',$data);
	}
	public function surat_keterangan_usaha($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_keterangan_usaha',$data);
	}
	public function surat_keterangan_pindah($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_keterangan_pindah',$data);
	}
	public function surat_keterangan_domisili($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_keterangan_domisili',$data);
	}
	public function surat_keterangan_pas_jalan($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_keterangan_pas_jalan',$data);
	}
	public function surat_pengantar_kk($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_pengantar_kk',$data);
	}
	public function surat_pengantar_ktp($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_pengantar_ktp',$data);
	}
	public function surat_pengesahan_kredit_bank($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_pengesahan_kredit_bank',$data);
	}
	public function surat_pengesahan_riwayat_hidup($kodeSurat,$tanggal,$bulan,$tahun,$jam,$menit)
	{
		$data['penduduk']=$this->m_input->get('tb_penduduk');
		 $this->load->view('onsite/surat_pengesahan_riwayat_hidup',$data);
	}
	public function proses_surat_kelakuan_baik(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_kelakuan_baik',$data);

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
			redirect('onsite/');
	}
	public function proses_surat_keterangan_lahir(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_keterangan_lahir',$data);

	}
  public function simpan_surat_keterangan_lahir(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_lahir',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_lahir');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			redirect('onsite/');
	}

	public function proses_surat_pengantar_ktp(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_pengantar_ktp',$data);

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
			redirect('onsite/');
	}
	
	public function proses_pengantar_kk(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_pengantar_kk',$data);

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
			redirect('onsite/');
	}

	public function proses_surat_keterangan_domisili(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_keterangan_domisili(',$data);

	}
  public function simpan_surat_keterangan_domisili(){
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$nik=$this->input->post('nik');
		$keperluan=$this->input->post('keperluan');

			$data= array('nama' => $nama,
				'jabatan' => $jabatan,
				'nik' => $nik,
				'keperluan' => $keperluan
				);

			$this->m_input->insert('tb_surat_keterangan_domisili',$data);
			$data['surat']=$this->m_input->get('tb_surat_keterangan_domisili');
				foreach ($data['surat'] as $value) {
					$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$value->nik);
				}
			redirect('onsite/');
	}

	public function proses_surat_keterangan_pindah(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_keterangan_pindah',$data);

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
			redirect('onsite/');
	}

	public function proses_surat_keterangan_pas_jalan(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_keterangan_pas_jalan',$data);

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
			redirect('onsite/');
	}

	public function proses_surat_keterangan_usaha(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_keterangan_usaha',$data);

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
			redirect('onsite/');
	}

	public function proses_surat_pengesahan_riwayat_hidup(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_pengesahan_riwayat_hidup',$data);

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
			redirect('onsite/');
	}

	public function proses_surat_pengesahan_kredit_bank(){

		$nik=$this->input->post('nama');
		$data['status']="create";
			$data['penduduk']=$this->m_input->getwhereid('tb_penduduk','nik',$nik);
			$this->load->view('onsite/form_surat_pengesahan_kredit_bank',$data);

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
			redirect('onsite/');
	}

}
