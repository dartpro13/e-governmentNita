<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function template() {
     // making temlate and send data to view.
     $this->template['header']   = $this->load->view('template/header', $this->data, true);
     $this->template['left']   = $this->load->view('template/left', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('template/footer', $this->data, true);
     $this->load->view('template/index', $this->template);
   }
}