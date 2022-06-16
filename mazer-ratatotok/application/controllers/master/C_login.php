<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends MY_Controller {


    public function getLogin(){

        $this->render('login/v_login',[]);
    }
}