<?php
include 'Ramal.php';

class Main extends Ramal {

	public $nama_user;
	public $gender;
	public $tanggallahir;

	public function __construct( $nama_user , $gender , $tanggallahir , $no_zodiak , $nama_zodiak , $kep , $ramalan , $ramalanjodoh , $ramalankarir , $ramalankeuangan, $ramalankesehatan , $angkakeb) {

			$this->nama_user = $nama_user;
			$this->gender = $gender;
			$this->tanggallahir = $tanggallahir;
			$this->no_zodiak = $no_zodiak;
			$this->nama_zodiak = $nama_zodiak;
			$this->kep = $kep;
			$this->ramalan = $ramalan;
			$this->ramalanjodoh = $ramalanjodoh;
			$this->ramalankarir = $ramalankarir;
			$this->ramalankeuangan = $ramalankeuangan;
			$this->ramalankesehatan = $ramalankesehatan;
			$this->angkakeb = $angkakeb;
	}

	public function __toString() {
			return "<br>Nama User : ". $this->nama_user . "<br>Gender : ". $this->gender . "<br>Tanggal Lahir : ". $this->tanggallahir;
	}
}

	$Main1 = new Main("Uzumaki Naruto" , "Pria" , "10 Oktober 2000" , "" , "" , "" , "" , "" , "" , "" , "" , "");

	$Main2 = new Main("Hyugaa Hinata" , "Wanita" , "27 Desember 2000" , "" , "" , "" , "" , "" , "" , "" , "" , "");


	echo "<br>";
	echo " =================RAMALAN ZODIAK================= ";
	echo "<br>";
	echo $Main1 ;
	echo "<br><br><br>";
	echo $Zodiak7;  //zodiak 7 karena tanggal dan bulan lahir user masuk ke zodiak libra
	echo "<br><br>";
	echo $ramal7;
	echo "<br><br>";
	echo "====================================================";
	echo "<br><br>";
	echo $Main2;
	echo "<br><br><br>";
	echo $Zodiak9;
	echo "<br><br>";
	echo $ramal9;
	echo "<br>";