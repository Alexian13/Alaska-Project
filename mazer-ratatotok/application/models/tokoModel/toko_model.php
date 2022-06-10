<?php
	class toko_model extends MY_Model
	{
	    public function __construct()
	    {
	        parent::__construct();

			$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	    }


		Public function modelToko() 
        {

	    	
		}
		
    }
