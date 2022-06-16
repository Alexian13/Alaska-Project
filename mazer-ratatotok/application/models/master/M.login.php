<?php
	class M_login extends MY_Model
    {


       public function __construct()
	    {
	        parent::__construct();

			$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	    }

        public function viewLogin() {
	    	$this->db->select("*")
				->from("mst_barang")
				->where('flag_active=',1);
			return $this->db->get()->result();
        }
    }