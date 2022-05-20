<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
    function render($content, $data = NULL){
        $data['header'] = $this->load->view('template/header', $data, TRUE);
        $data['side'] = $this->load->view('template/sidebar', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('v_layout', $data);
    }
}