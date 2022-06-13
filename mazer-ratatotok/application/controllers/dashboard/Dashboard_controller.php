<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends MY_Controller {

    public function getViewDashboard()
    {
        $this->render('dashboard/v_dashboard',[]);
    }
}
