<?php
	class M_barang extends MY_Model
    {


       public function __construct()
	    {
	        parent::__construct();

			$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	    }

        public function viewBarang() {
	    	$this->db->select("*")
				->from("mst_barang")
				->where('flag_active=',1);
			return $this->db->get()->result();
        }

        Public function tambahBarang() {

	    	$qinsert = $this->db->insert('mst_barang',$this->input->post());
			$last_id = $this->db->insert_id();
			return ($last_id);
		}

        public function deleteBarang()
		{
			$id = $this->input->post('id');
			$data = array(	
				'flag_active' => 0,
			);
			$this->db->where('mst_barang', $id);
			$this->db->update('id_barang', $data);
		}

    }


        

