<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends MY_Controller {
	public function index()
	{
        $this->render('dashboard/v_dashboard',[]);
	}
}
