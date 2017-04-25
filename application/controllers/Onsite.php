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
}
