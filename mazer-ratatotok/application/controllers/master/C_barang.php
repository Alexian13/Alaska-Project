<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/M_barang', 'mbar');
        // $this->load->model('M_laporan', 'ml');
        // $this->load->library('mylib');
        $this->load->library('upload');
    }

    public function getViewBarang()
    {
        $data['data_barang'] = $this->mbar->viewBarang();
        $this->render('barang/v_barang', $data);
    }
    public function tambahBarang()
    {
        $this->mbar->tambahBarang();
        redirect("master/C_barang/getViewBarang");
    }
    public function deleteBarang()
    {
        $this->mbar->deleteBarang();
    }
}
