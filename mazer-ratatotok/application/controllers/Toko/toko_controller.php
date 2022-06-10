<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_controller extends MY_Controller {

    public function getViewToko()
    {
        $this->render('toko/toko_view',[]);
    }
}
