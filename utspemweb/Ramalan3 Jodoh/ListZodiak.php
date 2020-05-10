<?php

class ListZodiak {
		public 
				$nama_zodiak,
				$tanggal;
		

		public function __construct($nama_zodiak, $tanggal ) {
			$this->nama_zodiak = $nama_zodiak;
			$this->tanggal = $tanggal;

		}

		// Mencetak List Zodiak
		public function __toString() {
			return "<br> Nama Zodiak : " . $this->nama_zodiak . " <br> Tanggal Lingkup Zodiak : " . $this->tanggal;
		}


	}

	// Isi List Zodiak
	$Zodiak1 = new ListZodiak("Aries", "Maret 21 - April 19");
	$Zodiak2 = new ListZodiak("Taurus", "April 20 - Mei 20");
	$Zodiak3 = new ListZodiak("Gemini", "Mei 21 - Juni 20");
	$Zodiak4 = new ListZodiak("Cancer", "Juni 21 - Juli 22");
	$Zodiak5 = new ListZodiak("Leo", "Juli 23 - Agustus 22");
	$Zodiak6 = new ListZodiak("Virgo", "Agustus 23 - September 22");
	$Zodiak7 = new ListZodiak("Libra", "September 23 - Oktober 22");
	$Zodiak8 = new ListZodiak("Scorpio", "Oktober 23 - November 21");
	$Zodiak9 = new ListZodiak("Sagitarius", "November 22 - Desember 21");
	$Zodiak10 = new ListZodiak("Capricorn", "Desember 22 - Januari 19");
	$Zodiak11 = new ListZodiak("Aquarius", "Januari 20 - Februari 18");
	$Zodiak12 = new ListZodiak("Pisces", "Februari 19 - Maret 20");
