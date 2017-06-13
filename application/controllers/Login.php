<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->helper('html');
        $this->load->helper('url');
        $this->assets='https://www.kantordesa-banjar.com/assets/login/';
        $this->load->model('login_model');
		//check the username is already set up or not
		if ($this->session->userdata('username')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == 'admin'){
				redirect('dashboard/');
			}
//            elseif($this->session->userdata('level') == 'lurah'){
//				redirect('lurah/');
//			}
//            elseif($this->session->userdata('level') == 'camat'){
//				redirect('camat/');
//			}
		}
	}
	public function index()
	{
        $data['title']='Kantor Desa Banjar | Login';
		$data['assets']=$this->assets;
		$this->load->view('login/index',$data);
	}
    
    public function login_process(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
        $pwd=$this->input->post('password');
        
        //calling chech_user() function in Login_model.php
		$result = $this->login_model->check_user($username, $password); 

		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->uid;
				$username = $row->username;
				$level = $row->level;
			}

			$newdata = array(
			        'uid'  => $id,
			        'username' => $username,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='admin') {
				redirect('dashboard/');
			}else{
                redirect('/pa_nita/index.php/login/');
            }
		}else{
            echo '<script>alert("invalid username or password");window.location="/pa_nita/index.php/login"</script>';
        }
	}
    
}
