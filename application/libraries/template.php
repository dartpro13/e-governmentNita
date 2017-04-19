<?php

class Template{

protected $_ci;

	function __construct(){
		$this->_ci=&get_instance();
	}

	function template($template,$data=null){


			$data['content'] = $this->_ci->load->view($template,$data,true);

			$data['_header'] = $this->_ci->load->view('template/header',$data,true);
			$data['_left'] = $this->_ci->load->view('template/left',$data,true);
			$data['_footbar'] = $this->_ci->load->view('template/footer',$data,true);
						


			$this->_ci->load->view('main_temp',$data);

	}


}