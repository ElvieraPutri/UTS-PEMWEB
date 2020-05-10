<?php

class Zodiak {
		public $no_zodiak,
				$nama_zodiak,
				$tanggal;
		

		public function __construct( $no_zodiak, $nama_zodiak, $tanggal ) {
			$this->no_zodiak = $no_zodiak;
			$this->nama_zodiak = $nama_zodiak;
			$this->tanggal = $tanggal;
		}

		// mencetak Zodiak
		public function __toString() {
			return "No Zodiak : " . $this->no_zodiak . "<br> Nama Zodiak : " . $this->nama_zodiak . " <br> Tanggal Lingkup Zodiak : " . $this->tanggal;
		}


	}

	//Isi Zodiak
	$Zodiak1 = new Zodiak("1", "Aries", "Maret 21 - April 19");
	$Zodiak2 = new Zodiak("2", "Taurus", "April 20 - Mei 20");
	$Zodiak3 = new Zodiak("3", "Gemini", "Mei 21 - Juni 20");
	$Zodiak4 = new Zodiak("4", "Cancer", "Juni 21 - Juli 22");
	$Zodiak5 = new Zodiak("5", "Leo", "Juli 23 - Agustus 22");
	$Zodiak6 = new Zodiak("6", "Virgo", "Agustus 23 - September 22");
	$Zodiak7 = new Zodiak("7", "Libra", "September 23 - Oktober 22");
	$Zodiak8 = new Zodiak("8", "Scorpio", "Oktober 23 - November 21");
	$Zodiak9 = new Zodiak("9", "Sagitarius", "November 22 - Desember 21");
	$Zodiak10 = new Zodiak("10", "Capricorn", "Desember 22 - Januari 19");
	$Zodiak11 = new Zodiak("11", "Aquarius", "Januari 20 - Februari 18");
	$Zodiak12 = new Zodiak("12", "Pisces", "Februari 19 - Maret 20");

//	echo "<br><br>";
//	echo "====DAFTAR ZODIAK====";
//	echo "<br><br>";
//	echo $Zodiak1;
//	echo "<br><br>"; 
//	echo $Zodiak2;
//	echo "<br><br>";
//	echo $Zodiak3;
//	echo "<br><br>";
//	echo $Zodiak4;
//	echo "<br><br>";
//	echo $Zodiak5;
//	echo "<br><br>";
//	echo $Zodiak6;
/*	echo "<br><br>";
	echo $Zodiak7;
	echo "<br><br>";
	echo $Zodiak8;
	echo "<br><br>";
	echo $Zodiak9;
	echo "<br><br>";
	echo $Zodiak10;
	echo "<br><br>";
	echo $Zodiak11;
	echo "<br><br>";
	echo $Zodiak12;
	echo "<br><br>"; */