<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_controller extends MY_Controller {

    public function getViewBarang()
    {
        $this->render('barang/v_barang',[]);
    }
}
