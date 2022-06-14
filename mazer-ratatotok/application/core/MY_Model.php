<?php

class MY_Model extends CI_Model {
	public function __construct() {
        parent::__construct();
		$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);	
		$this->load->database();
    }

	public function tgl($originalDate){
		return(date("d-m-Y", strtotime($originalDate)));
	}

	public function terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return $this->terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return $this->terbilang($x / 10) . " puluh" . $this->terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . $this->terbilang($x - 100);
  elseif ($x < 1000)
    return $this->terbilang($x / 100) . " ratus" . $this->terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . $this->terbilang($x - 1000);
  elseif ($x < 1000000)
    return $this->terbilang($x / 1000) . " ribu" . $this->terbilang($x % 1000);
  elseif ($x < 1000000000)
    return $this->terbilang($x / 1000000) . " juta" . $this->terbilang($x % 1000000);
}
	
	public function numtobln($bln){
		$namabulan="";
		switch ($bln)
		{
			case 1:
			$namabulan="Januari";
			break;
			case 2:
			$namabulan="Februari";
			break;
			case 3:
			$namabulan="Maret";
			break;
			case 4:
			$namabulan="April";
			break;
			case 5:
			$namabulan="Mei";
			break;
			case 6:
			$namabulan="Juni";
			break;
			case 7:
			$namabulan="Juli";
			break;
			case 8:
			$namabulan="Agustus";
			break;
			case 9:
			$namabulan="September";
			break;
			case 10:
			$namabulan="Oktober";
			break;
			case 11:
			$namabulan="November";
			break;
			case 12:
			$namabulan="Desember";
			break;
		}
		return($namabulan);
	}
	
	public function doi($angka)
	{
		return (number_format($angka,0,',','.'));
	}
}

?>