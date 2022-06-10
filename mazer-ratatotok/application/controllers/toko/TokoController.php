<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TokoController extends MY_Controller {

    public function getViewToko()
    {
        $this->render('Toko/toko_view',[]);
    }
}
