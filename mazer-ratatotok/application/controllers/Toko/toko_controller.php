<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko_controller extends MY_Controller {

    public function toko()
    {
        $this->render('Toko/tokoview');
    }
}