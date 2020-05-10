<?php
include 'ListZodiak.php';

class RamalanJodohZodiak extends ListZodiak {
	public
			$persentase,
			$ramalan;
		
			
	public function __construct( 
		
		$nama_zodiak, $tanggal, $persentase, $ramalan) {

			
			$this->nama_zodiak = $nama_zodiak;
			$this->tanggal = $tanggal;
			$this->persentase = $persentase;
			$this->ramalan = $ramalan;
			
	}

	public function __toString() {
			return "<br><br> Persentase Kecocokan: " . $this->persentase . "<br><br>Ramalan : " . $this->ramalan;
	}
}

	//Kecocokan 100%
	$RamalanJodohZodiak1 = new RamalanJodohZodiak("" , "" , "100%" , 
		"Aries memiliki sifat yang tidak ingin dikekang dan pecinta kebebasan. Aries juga seorang yang tidak banyak menuntut terhadap pasangannya. Sedangkan Sagitarius adalah seorang yang tenang dan memiliki solusi dari masalah yang ada sehingga apabila kedua zodiak ini bersatu maka akan dapat saling melengkapi");


	//Kecocokan 0%
	$RamalanJodohZodiak2 = new RamalanJodohZodiak("" , "" , "0%" , 
	"Aries memiliki sifat yang tidak ingin dikekang dan pecinta kebebasan. Aries juga seorang yang tidak banyak menuntut terhadap pasangannya. Sedangkan Taurus terkenal dengan sifat keras kepalanya sehingga apabila kedua zodiak ini bersatu maka akan sangat sulit jikalau bertengkar tidak ada yang ingin mengalah");




	
echo "<br>=====TES KECOCOKAN DENGAN PASANGAN=====<br><br>";
echo "Zodiak User : ";
echo $Zodiak1;
echo "<br><br>Zodiak Pasangan : ";
echo $Zodiak9;
echo $RamalanJodohZodiak1;
echo "<br><br><br>=====TES KECOCOKAN DENGAN PASANGAN=====<br><br>";
echo "Zodiak User : ";
echo $Zodiak1;
echo "<br><br>Zodiak Pasangan : ";
echo $Zodiak2;
echo $RamalanJodohZodiak2;