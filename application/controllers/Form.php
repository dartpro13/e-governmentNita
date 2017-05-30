<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct(); 
			$this->load->model("m_input");
		}

	public function input_penduduk()
	{
		 $this->template->template('form/input_penduduk');
	}
    public function import_penduduk()
	{
		 $this->template->template('form/import_penduduk');
	}

	public function input_pegawai()
	{
		 $this->template->template('form/input_pegawai');
	}
    public function input_surat_masuk()
	{
        $data['status']="create";
		 $this->template->template('form/input_surat_masuk',$data);
	}

	

	
}
