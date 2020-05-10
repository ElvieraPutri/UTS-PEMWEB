<?php
include 'Shio.php';

class MainShio extends Shio {

	public $nama_user;
	public $tahunlahir;

	public function __construct( $nama_user , $tahunlahir , $nama_shio, $kep, $ramalanjodoh, $ramalankarir, $ramalankeuangan, $ramalankesehatan, $angkakeb) {

			$this->nama_user = $nama_user;
			$this->tahunlahir = $tahunlahir;
			$this->nama_shio = $nama_shio;
			$this->kep = $kep;
			$this->ramalanjodoh = $ramalanjodoh;
			$this->ramalankarir = $ramalankarir;
			$this->ramalankeuangan = $ramalankeuangan;
			$this->ramalankesehatan = $ramalankesehatan;
			$this->angkakeb = $angkakeb;
	}

	public function __toString() {
			return "<br>Nama User : ". $this->nama_user . "<br>Tahun Lahir : ". $this->tahunlahir;
	}
}

	$MainShio1 = new MainShio("Uchiha Sasuke" , "2000" , "" , "" , "" , "" , "" , "" , "");

	$MainShio2 = new MainShio("Haruno Sakura" , "1999" , "" , "" , "" , "" , "" , "" , "");


	echo "<br>";
	echo " ===================RAMALAN SHIO=================== ";
	echo "<br>";
	echo $MainShio1 ;
	echo "<br><br><br>";
	echo $shio5;  //shio 5 karena tahun lahir user masuk ke shio Naga
	echo "<br><br>";
	echo "====================================================";
	echo "<br><br>";
	echo $MainShio2;
	echo "<br><br><br>";
	echo $shio4;
	echo "<br><br>";