<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
        if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		}

	public function input_penduduk()
	{
         $data['status']="create";
		 $this->template->template('form/input_penduduk',$data);
	}
    public function import_penduduk()
	{
		 $this->template->template('form/import_penduduk');
	}

	public function input_pegawai()
	{
		 $data['status']="create";
		 $this->template->template('form/input_pegawai',$data);
	}
    public function input_surat_masuk()
	{
        $data['status']="create";
		 $this->template->template('form/input_surat_masuk',$data);
	}

	

	
}
