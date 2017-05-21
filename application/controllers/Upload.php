<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('online/upload_persyaratan', array('error' => ' ' ));
	}
    public function upload_persyaratan($kodeSurat){
        $data['title']='Online';
    $data['kodeSurat']=$kodeSurat;
    $data['tanggal']=date('d');
    $data['bulan']=date('m');
    $data['tahun']=date('Y');
    $data['jam']=date('H');
    $data['menit']=date('i');
    $this->load->view('Online/upload_persyaratan',$data);
    }

	public function upload_act($kodeSurat){
		$config['upload_path'] = './file/';
		$config['allowed_types'] = 'docx|pdf|doc|rar|zip';
		$config['max_size']	= '100000'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
 
		$this->upload->initialize($config);
        $ks="";
        if($kodeSurat=="SKB"){
          $ks="surat_kelakuan_baik";
        }else if($kodeSurat=="SKL"){
          $ks="surat_keterangan_lahir";
        }else if($kodeSurat=="SPKTP"){
          $ks="surat_pengantar_ktp";
        }else if($kodeSurat=="SPKK"){
          $ks="surat_pengantar_kk";
        }else if($kodeSurat=="SKD"){
          $ks="surat_keterangan_domisili";
        }else if($kodeSurat=="SKP"){
          $ks="surat_keterangan_pindah";
        }else if($kodeSurat=="SKPJ"){
          $ks="surat_keterangan_pas_jalan";
        }else if($kodeSurat=="SKU"){
          $ks="surat_keterangan_usaha";
        }else if($kodeSurat=="SPRH"){
          $ks="surat_pengesahan_riwayat_hidup";
        }else if($kodeSurat=="SPKB"){
          $ks="surat_pengesahan_kredit_bank";
        }
 
		//if upload failed
		if ( ! $this->upload->do_upload('berkas')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('Online/upload_persyaratan', $data);
		//if upload success
		}else{
 
			$data_insert = array(
					            'nama_file' => $this->upload->data('file_name'),
					            'persyaratan_untuk' => $ks
					        );
			//query to insert into myupload table
			$this->db->insert('tb_file_persyaratan', $data_insert);
 
			$data['message'] =  'Your file was successfully uploaded!';
            $data['title']='Online';
            $data['kodeSurat']=$kodeSurat;
            $data['tanggal']=date('d');
            $data['bulan']=date('m');
            $data['tahun']=date('Y');
            $data['jam']=date('H');
            $data['menit']=date('i');
			$this->load->view('Online/set_nomor_surat',$data);
		}
	}
	
}