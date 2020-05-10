<?php
include 'Zodiak.php';

class Ramal extends Zodiak {
	public $ramalan,
			$kep,
			$ramalanjodoh,
			$ramalankarir,
			$ramalankeuangan,
			$ramalankesehatan,
			$angkakeb;

	public function __construct( 
		$no_zodiak, $nama_zodiak, $tanggal,
		$kep, $ramalan, $ramalanjodoh, $ramalankarir, $ramalankeuangan, $ramalankesehatan, $angkakeb ) {

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
			return 
			" <br>Kepribadian : " . $this->kep . " <br> Ramalan Bulanan : " . $this->ramalan . "<br><br> Ramalan Jodoh : " . $this->ramalanjodoh . "<br><br>Ramalan Karir : " . $this->ramalankarir . "<br><br>Ramalan Keuangan : " . $this->ramalankeuangan . "<br><br>Ramalan Kesehatan : " . $this->ramalankesehatan . "<br><br>Angka Keberuntungan : " . $this->angkakeb;
	}
}

	//Zodiak Aries
	$ramal1 = new Ramal("" , "" , "" , 
		"Terpercaya, Energik dan petualang , Pemberani, Percaya diri, Dinamis" , 
		"Ambil sebuah pekerjaan sampingan & dapatkan tambahan pendapatan. Sedikit uang lebih akan berguna di musin liburan ini. Temukan cara membuat atasan atau klien terkesan pada anda" , 
		"Sifat tidak sabaran Aries paling sulit dirubah makanya Aries kerap membuat keputusan impulsif dan mendadak. Apabila keputusan ini bertentangan dengan sekitar bukan tidak mungkin menyebabkan menyebabkan kekecewaan terutama di dalam sebuah hubungan." , 
		"Pekerjaan akan berjalan sesuai rencana dan harapan Anda dan akan berkembang dengan baik. Ketulusan dan komitmen Anda akan memenangkan penghargaan atasan, dan Anda mungkin mendapat pengakuan karena berhasil menyelesaikan suatu proyek. Anda juga bisa mendapatkan peluang bagus untuk membuktikan kredensial Anda di kantor." , 
		"Keuangan mungkin terlihat dalam kemajuan substansial. Mungkin ada aliran uang melalui pasangan. Bisnis, berurusan dengan barang-barang seperti kendaraan, parfum, kosmetik, dll dapat menghasilkan banyak keuntungan. Anda mungkin dapat memenuhi semua kebutuhan keuangan Anda sekarang" ,
		"Jika Anda sudah menderita beberapa penyakit atau gangguan kesehatan lainnya, mungkin di bulan ini Anda dapat berharap untuk pemulihan. Tetapi ada kemungkinan bagi sebagian dari Anda mengalami komplikasi kecil yang berhubungan dengan saraf, namun ini bisa hilang dengan cepat. Buah-buahan, sayuran hijau, dan makanan bergizi lainnya yang sesuai dengan fisik Anda dapat membuat Anda bugar, berenergi, dan antusias." ,
		"5, 9, 10, 12, 20, dan 31");

	//Zodiak Taurus
	$ramal2 = new Ramal("" , "" , "" , 
		"Sabar, Hangat, Loyal, dan Mencintai keamanan" , 
		"Taurus menempati posisi kedua dalam hal malas. Hal ini dikarenakan Taurus memiliki kepribadian yang tidak ingin diganggu, tak ingin dipaksa dan bahkan dalam sehari bisa saja tidak melakukan apa-apa hanya karena malas. Semua yang dilakukannya atas dasar kemauannya sendiri." , 
		"Zodiak ini memang setia dan perhatian banget dengan pasangannya. Tapi sifat keras kepalanya jangan harap bisa dirubah. Keras kepalanya sering menjadi sumber masalah didalam hubungan. Mereka ingin melakukan hal yang mereka inginkan dan memaksa pasangan untuk menurutinya." , 
		"Kerja keras dan komitmen Anda untuk menyelasaikan tanggung jawab pekerjaan dapat membantu Ini mungkin waktu yang ideal bagi Taurus untuk meningkatkan prospek mereka untuk kemajuan dalam karir mereka. Kerja keras dan produktivitas akan membuat Taurus mendapatkan pengakuan, selain memberi juga banyak kepuasan. Aktivitas perdagangan dan transaksi dapat memberikan hasil biasa, dan karenanya, ini mungkin waktu yang tepat untuk bisnis Anda. Namun dengan upaya minimal, Anda tidak dapat mengharapkan keberuntungan datang ke jalan Anda. Sebaliknya, akan ada beberapa peluang bagi Anda untuk mendapatkan keberuntungan dengan kerja keras." , 
		"Sektor keuangan kemungkinan akan memuaskan. Anda akan memberikan prioritas untuk memenuhi kebutuhan pribadi Anda dan tuntutan keluarga Anda. Dengan penghasilan yang Anda hasilkan sekarang, Anda harus dapat memenuhi semua komitmen keuangan Anda, dengan cukup nyaman." ,
		"Kesehatan mungkin perlu diperhatikan. Gangguan pencernaan mungkin muncul, dan ini mungkin terutama disebabkan oleh makanan Anda yang tidak tepat waktu. Memberi cukup istirahat pada tubuh dalam interval waktu yang teratur dapat membantu Anda pulih dan mendapatkan kembali kebugaran." ,
		"6, 7, 9, 13, 21, dan 29");
	
	//Zodiak Gemini
	$ramal3 = new Ramal("" , "" , "" , 
		"Mudah beradaptasi , Pengayom , Perhatian , Berjiwa muda dan hidup" , 
		"Sesuatu terjadi tanpa sepengetahuan anda, tapi tidak perlu khawatir. Mungkin sebuah kejutan menanti anda, tetap diam & berpura-pura tak menyadari saat semua org menunjukkan perhatiannya." , 
		"Keramahan dan tingkah lucu Gemini membuat zodiak ini enggak disiplin. Dia bisa tiba - tiba membatalkan rencana kencan karena baru ingat ada janji dengan teman. Gemini mencoba melakukan banyak hal dengan banyak orang namun sering gagal." , 
		"Gemini mungkin menghadapi hambatan dalam bekerja. Mungkin juga ada kepahitan dengan rekan kerja. Tetapi Anda dapat memperoleh pengalaman yang bermanfaat dengan penggunaan teknologi baru. Anda dapat berharap untuk beberapa peningkatan karir, sementara Anda mungkin juga dapat memenuhi harapan Anda melalui kerja keras. Prospek bisnis tidak terlihat cerah. Keuntungan yang diharapkan mungkin tidak datang melalui perjanjian baru, sementara Anda bahkan mungkin diminta untuk menunda tugas-tugas tertentu. Ada juga peluang bagi mitra Anda untuk tetap menunggu beberapa pekerjaan. Jadi, lebih baik bagi Anda untuk fokus sepenuhnya pada pekerjaan yang saat ini ada di tangan Anda." , 
		"Pasang surut terlihat dalam urusan ekonomi. Anda mungkin mengeluarkan pengeluaran yang sia-sia saat mencoba memenuhi kebutuhan sehari-hari. Anda harus berpikir dengan baik sebelum merambah ke aktivitas apa pun dan fokus pada penghematan, untuk masa depan." ,
		"Beberapa dari Anda mungkin menderita rematik atau penyakit terkait panas. Jadi, cobalah untuk merawat kesehatan Anda dengan serius dan segera atasi masalah Anda. Istirahat yang cukup dan tidur akan meningkatkan kebugaran Anda." ,
		"2, 6, 9, 25, 30, dan 31");

	//Zodiak Cancer
	$ramal4 = new Ramal("" , "" , "" , 
		"Moody, Sentimentil, Sulit Memaafkan , Setia, Suka Menolong , Memiliki Daya Ingat Yang Kuat" , 
		"Muncul banyak sekali pertanyaan yang harus anda sendiri yang menjawabnya. Banyak masalah tentang diri, agama, pada kesabaaran yang ahrus diuji" , 
		"Zodiak ini menganggap perasaannya secara begitu serius jadi gak heran kalau Cancer gampang banget Baper karena hal - hal kecil. Sifat sensitifnya juga membuat moodnya suka nik - turun." , 
		"Cancer yang bekerja dapat berharap untuk kemajuan yang baik dalam karir mereka sekarang, jika mereka dapat memanfaatkan peluang yang datang kepada mereka, untuk keuntungan terbaik. Sebagai warga Cancer, bulan ini juga akan bermanfaat bagi Anda jika Anda menyelesaikan pekerjaan Anda saat itu juga, tidak ada yang akan menunggu. Selain itu, Anda juga akan berhubungan baik dengan bawahan. Dalam hal bisnis, mungkin akan ada banyak perkembangan, meskipun Anda menghadapi persaingan ketat dan kesulitan terkait. Transaksi yang melibatkan tanah dapat menghasilkan pendapatan yang bagus, untuk Anda. Ketajaman bisnis Anda dapat membuat orang lain menyadari pentingnya Anda." , 
		"Anda mungkin mengalami kerugian atau pengeluaran yang sia-sia di periode ini, dan ini dapat membuat kondisi keuangan menjadi rapuh. Jadi sangat penting bagi Anda untuk menghabiskan uang hanya untuk hal-hal penting, dan menghindari pengeluaran lain. Tetapi mungkin ada keuntungan dari bisnis dan bantuan dari ortu." ,
		"Tidak ada masalah besar yang terlihat di bidang kesehatan, dan hidup dapat berjalan santai dan bebas dari ketegangan. Tetapi tidak disarankan untuk mengambil risiko dalam hitungan ini. Istirahat yang cukup dan tidur nyenyak dapat meningkatkan kebugaran Anda." ,
		"2, 20, 25, 32, dan 40");

	//Zodiak Leo
	$ramal5 = new Ramal("" , "" , "" , 
		"Kreatif , Rendah hati , Tidak suka membeda-bedakan , Antusias , Berpikiran terbuka , Ekspansif" , 
		"Akan sulit mencari jalan keluar jika anda berkeras kepala dlm masalah keluarga. Hati-hati, anda malah merugikan diri sendiri. Mengambil pendekatan baru bisa memberikan hasil lebih positif." , 
		"Walau bisa menjadi pasangan yang gak membosankan namun sifat narsis zodiak ini membuat pasangannya harus extra sabar. Apalagi zodiak ini juga bisa bersikap cuek dan memprioritaskan dirinya sendiri ketimbang pasangannya." , 
		"Peruntungan beragam akan dialami oleh Leo yang bekerja sebagai karyawan. Sangat penting bagi Anda untuk menyelesaikan tugas Anda pada prioritas dan tidak membiarkan apa pun tertunda. Anda juga harus berusaha tetap ramah dengan bawahan Anda. Anda dapat memperoleh pengalaman yang bermanfaat dalam menggunakan teknologi baru. Sifat mandiri dan pendekatan berani Anda dapat membantu pertumbuhan bisnis sampai batas tertentu, dan ini dapat berkontribusi pada kemajuan perdagangan yang mengesankan. Apa pun yang menjadi lingkup aktivitas Anda, efisiensi kerja Anda akan mengemuka di bulan ini." , 
		"Ada peluang besar bagi Anda untuk mendapat untung besar dalam profesi atau bisnis. Ekonomi akan tetap kuat, dan mungkin juga menyaksikan peningkatan lebih lanjut secara bertahap. Anda juga dapat menggunakan periode ini untuk meningkatkan tabungan Anda." ,
		"Anda mungkin harus sangat berhati-hati dengan kesehatan Anda sekarang. Anda mungkin menderita dari kelemahan umum, dan ini dapat membuat Anda membosankan dan lesu. Karenanya, sangat disarankan agar Anda segera menghadiri bahkan ketidaknyamanan kecil." ,
		"2, 4, 11, 22, 30, dan 32");

	//Zodiak Virgo
	$ramal6 = new Ramal("" , "" , "" , 
		"Rela Berkorban , Sahabat yang Baik , Praktikal  , Rajin , Pandai dan analitikal" , 
		"Semua rahasia berada di tangan & semua org ingin bergabung dgn anda. Aksi yg agresif akan membuat semua pesaing menoleh serta meninggikan status anda." , 
		"Zodiak ini memiliki standar tinggi terhadap segala aspek hidup terutama hubungan. Mereka harus selalu diingatkan bahwa pasangan yang bahagia juga bertengkar dan Virgo gak harus selalu memperbaiki segala hal yang dirasa kurang tepat." , 
		"Virgo yang bekerja sebagai karyawan mungkin bekerja dengan efisiensi tinggi sekarang, dan ini dapat menciptakan identitas unik bagi mereka. Beberapa dari Anda mungkin mendapatkan transfer pekerjaan. Tetapi ada kemungkinan bahkan kehilangan pekerjaan, untuk beberapa orang; Waspadalah! Anda mungkin bekerja untuk potensi Anda. Keberhasilan dalam perdagangan atau bisnis terjamin untuk Anda sekarang, bahkan jika itu kadang-kadang tertunda. Ini bisa memberi Anda kehormatan dan pengakuan baik. Tetapi ada kemungkinan bahwa beberapa dari Anda mungkin menderita kegelisahan atau kurang fokus." , 
		"Penghasilan bagus terlihat melalui bantuan ayah, dan penghasilan Anda akan cukup untuk memenuhi semua komitmen keuangan Anda. Namun, Anda disarankan untuk berhati-hati dalam urusan pemerintah." ,
		"Anda dapat berharap untuk menikmati kehidupan yang damai dan bebas ketegangan, di bulan ini. Anda juga dapat pulih dari penyakit apa pun yang sudah Anda derita, dan mendapatkan kesehatan yang lebih baik. Anda dapat mencoba pengobatan alternatif atau pun pengobatan tradisional, dan itu mungkin baik bagi Anda." ,
		"3, 4, 13, 14, 29, dan 30");

	//Zodiak Libra
	$ramal7 = new Ramal("" , "" , "" , 
		"Cerdas, Suka Berbagi Ilmu, Diplomatis , Romantis , charming , Sosial , Idealistik dan senang kedamaian" , 
		"Terlibatlah dgn persoalan yg menyangkut relasi yg lebih berumur. Anda harus selalu ingat untuk menjaga semua org yg telah lebih dahulu menjaga anda. Jangan pernah mundur." , 
		"Zodiak berlambang timbangan ini selalu mencari keseimbangan dalam hidupnya sambil mencoba menyenangkan semua orang di hidupnya. Libra sulit untuk berhenti berpura - pura." , 
		"Libra sebagai pekerja dapat melakukan sesuai harapan dan menyaksikan kemajuan dalam karir. Pendekatan dan dedikasi tulus Anda akan datang untuk pujian dari atasan. Anda juga dapat memperoleh peluang bagus untuk membuktikan potensi Anda dalam bekerja. Keputusan Anda yang berani dan pendekatan independen harus mendukung aktivitas perdagangan atau bisnis Anda. Banyak hal akan membantu pertumbuhannya. Tetapi prospek bisnis seperti itu akan sangat tergantung pada operasi Anda yang efisien. Keberhasilan juga dapat tertunda, dalam beberapa kasus." , 
		"Skenario ekonomi terlihat cerah. Anda mungkin dapat menerima bantuan moneter dari ibu, pada saat dibutuhkan. Biaya pengeluaran juga mungkin tidak banyak; tetapi tetap saja, merencanakannya dengan hati-hati dan mengurangi beberapa di antaranya, dapat membantu Anda menghapus pinjaman." ,
		"Anda mungkin tetap bugar, secara keseluruhan. Namun, disarankan agar Anda mengikuti diet ketat dan juga melakukan olahraga teratur. Ini dapat membantu Anda tetap sehat dan aktif." ,
		"9, 11, 13, 20, 26, dan 35");

	//Zodiak Scorpio
	$ramal8 = new Ramal("" , "" , "" , 
		"Sopan, Taat dengan Orang Tua, Emosional , Intuitif , Bertenaga dan hasrat" , 
		"Acara liburan kali ini akan membawa anda menemui cinta... Aktif berpartisipasi akan memperlihatkan betapa dinamis & menariknya anda. Bergerak lebih dulu & aksi yg terlihat jelas akan memberikan jawaban 'ya'. " , 
		"Zodiak ini cenderung tertutup dan penuh rahasia, bahkan dengan pacarnya sendiri. Scorpio memilih menyembunyikan perasaan dan pemikirannya daripada mengatakannya. Mereka baru bisa ini kalau sudah sangat percaya dengan pasangannya." , 
		"Sukses adalah hal yang mungkin bagi Anda di bulan ini, tetapi hanya setelah menghadapi dan mengatasi banyak tantangan dalam karir Anda. Anda mungkin harus menangani pekerjaan tambahan. Tetapi pastikan untuk memenuhi tanggung jawab pekerjaan Anda dengan baik, dan juga menghindari keterlambatan penyelesaian tugas Anda. Scorpio mungkin harus melakukan semua upaya untuk mencapai target mereka dalam perdagangan atau bisnis. Kekhawatiran juga dapat muncul dalam pikiran Anda, tentang penugasan atau rencana baru. Tetapi kerangka berpikir positif Anda dan kemampuan Anda untuk bertindak cepat dapat bekerja untuk keuntungan pasti Anda." , 
		"Masalah uang mungkin perlu diwaspadai. Aliran pendapatan mungkin rata-rata, sedangkan Anda mungkin harus menghabiskan banyak pengeluaran untuk memenuhi kebutuhan pribadi Anda. Biaya untuk hiburan dan barang-barang mewah juga cenderung sangat tinggi." ,
		"Anda disarankan untuk mengonsumsi makanan bergizi dan secara ketat mengikuti saran medis untuk menjaga kebugaran Anda. Anda mungkin juga harus melakukan latihan fisik secara teratur, dan ini juga akan membantu meningkatkan kesehatan Anda." ,
		"9, 10, 11, 13, dan 22");

	//Zodiak Sagitarius
	$ramal9 = new Ramal("" , "" , "" , 
		"Jujur , terbuka , Optimis dan mencintai kebebasan , Selera humor yang tinggi dan filosofikal" , 
		"Sebuah pekerjaan yg diselesaikan dgn baik akan memberikan penghargaan. Semakin banyak yg anda kerjakan di hari ini, semakin baik untuk perkembangan masa depan." , 
		"Zodiak ini sulit puas dan selalu mencari pengalam baru dihidupnya membuat zodiak ini sulit untuk melakukan komitmen dalam waktu yang lama." , 
		"Kemajuan karier semakin dekat, dan Anda mungkin mendapatkan hasil yang menguntungkan dalam semua aktivitas terkait pekerjaan Anda. Otoritas Anda juga akan senang dengan pekerjaan Anda dan tetap berhubungan langsung dengan Anda. Tetap disarankan agar Anda memeriksa dan memverifikasi apa pun yang Anda lakukan, lebih dari sekali, dan ini dapat membantu Anda meningkatkan output. Masa-masa sulit terlihat bagi para pebisnis Sagitarius. Lebih baik untuk menghindari memulai usaha kemitraan baru di bulan ini. Orang mungkin juga mencoba menipu Anda, dan Anda mungkin harus berhati-hati tentang hal ini. Jadi, sangat ideal untuk berpikir dengan baik dan mempertimbangkan semua aspek dengan cermat sebelum mengambil keputusan terkait perdagangan atau bisnis." , 
		"Kondisi keuangan Anda akan baik, dan Anda mungkin dapat memenuhi semua kebutuhan Anda dengan nyaman melalui tabungan Anda. Tetapi masih lebih baik bagi Anda untuk berpikir dengan bijak sebelum melanjutkan dengan tindakan apa pun yang memiliki implikasi moneter." ,
		"Kesehatan mungkin memerlukan perhatian. Anda dapat pulih dari beberapa penyakit dan dapat memperoleh kembali kesehatan selanjutnya. Keberhasilan dan kebahagiaan Anda dapat meningkatkan tingkat kebugaran Anda, dan Anda mungkin dapat menikmati kehidupan yang bebas ketegangan dan damai." ,
		"4, 6, 15, 17, 30, dan 31");

	//Zodiak Capricorn
	$ramal10 = new Ramal("" , "" , "" , 
		"Pandai Mengontrol Diri, Bertanggung Jawab, Pendiam, Ambisius, Materialis, Gengsi Tinggi, dan Suka Memerintah" , 
		"Tidak usah kecewa atau sedih karena masalah yang sedang anda alami hanyalah sebuah kesalapahaman saja. Lebih baik untuk segera berbicara dengan orang yang bersangkutan." , 
		"Sifat Pelit Capricorn bisa jadi bikin pasangan ilfeel. Sebagai zodiak pekerja keras, Capricorn lebih senang mencari uang daripada menghabiskannya. Jadi sebaiknya kamu kurangi sedikit sifat pelitmu karena pelit dan sedang berhemat itu berbeda." , 
		"nda dapat menikmati waktu yang memuaskan. Tetapi Anda mungkin harus memikul tanggung jawab tambahan sekarang, dan karenanya, khususnya tentang melepaskan mereka dengan komitmen penuh. Penghargaan yang Anda dapatkan untuk kinerja Anda akan memberi Anda banyak kepuasan dan kebahagiaan. Sementara itu, aktivitas bisnis dan perdagangan akan mendapatkan arti penting dalam skema Anda. Anda juga dapat memperoleh banyak dukungan sosial untuk meningkatkan prospek bisnis. Anda dapat melakukan tour jarak jauh, dan ini dapat membantu Anda mendapatkan investasi untuk aktivitas perdagangan Anda." , 
		"Anda mungkin memiliki kelancaran dalam hal uang. Tabungan Anda dapat membantu memenuhi komitmen moneter Anda. Tetapi Anda mungkin harus mengeluarkan pengeluaran yang sia-sia saat mencoba memenuhi kebutuhan harian Anda. Jadi lebih baik bagi Anda untuk berpikir dua kali sebelum melakukan aktivitas apa pun yang melibatkan uang." ,
		"Kesehatan mungkin rata-rata. Anda disarankan untuk menambahkan banyak buah-buahan dan sayuran hijau dalam diet Anda, dan ini dapat meningkatkan energi dan kekuatan Anda. Ini juga dapat meningkatkan daya tahan Anda, yang, pada gilirannya, dapat mengatasi segala penyakit ringan. Meditasi juga dapat membantu Anda tetap sehat dan bugar." ,
		"9, 15, 16, 29, 33, dan 40");

	//Zodiak Scorpio
	$ramal8 = new Ramal("" , "" , "" , 
		"Sopan, Taat dengan Orang Tua, Emosional , Intuitif , Bertenaga dan hasrat" , 
		"Acara liburan kali ini akan membawa anda menemui cinta... Aktif berpartisipasi akan memperlihatkan betapa dinamis & menariknya anda. Bergerak lebih dulu & aksi yg terlihat jelas akan memberikan jawaban 'ya'. " , 
		"Zodiak ini cenderung tertutup dan penuh rahasia, bahkan dengan pacarnya sendiri. Scorpio memilih menyembunyikan perasaan dan pemikirannya daripada mengatakannya. Mereka baru bisa ini kalau sudah sangat percaya dengan pasangannya." , 
		"Sukses adalah hal yang mungkin bagi Anda di bulan ini, tetapi hanya setelah menghadapi dan mengatasi banyak tantangan dalam karir Anda. Anda mungkin harus menangani pekerjaan tambahan. Tetapi pastikan untuk memenuhi tanggung jawab pekerjaan Anda dengan baik, dan juga menghindari keterlambatan penyelesaian tugas Anda. Scorpio mungkin harus melakukan semua upaya untuk mencapai target mereka dalam perdagangan atau bisnis. Kekhawatiran juga dapat muncul dalam pikiran Anda, tentang penugasan atau rencana baru. Tetapi kerangka berpikir positif Anda dan kemampuan Anda untuk bertindak cepat dapat bekerja untuk keuntungan pasti Anda." , 
		"Masalah uang mungkin perlu diwaspadai. Aliran pendapatan mungkin rata-rata, sedangkan Anda mungkin harus menghabiskan banyak pengeluaran untuk memenuhi kebutuhan pribadi Anda. Biaya untuk hiburan dan barang-barang mewah juga cenderung sangat tinggi." ,
		"Anda disarankan untuk mengonsumsi makanan bergizi dan secara ketat mengikuti saran medis untuk menjaga kebugaran Anda. Anda mungkin juga harus melakukan latihan fisik secara teratur, dan ini juga akan membantu meningkatkan kesehatan Anda." ,
		"9, 10, 11, 13, dan 22");

		//Zodiak Scorpio
	$ramal8 = new Ramal("" , "" , "" , 
		"Sopan, Taat dengan Orang Tua, Emosional , Intuitif , Bertenaga dan hasrat" , 
		"Acara liburan kali ini akan membawa anda menemui cinta... Aktif berpartisipasi akan memperlihatkan betapa dinamis & menariknya anda. Bergerak lebih dulu & aksi yg terlihat jelas akan memberikan jawaban 'ya'. " , 
		"Zodiak ini cenderung tertutup dan penuh rahasia, bahkan dengan pacarnya sendiri. Scorpio memilih menyembunyikan perasaan dan pemikirannya daripada mengatakannya. Mereka baru bisa ini kalau sudah sangat percaya dengan pasangannya." , 
		"Sukses adalah hal yang mungkin bagi Anda di bulan ini, tetapi hanya setelah menghadapi dan mengatasi banyak tantangan dalam karir Anda. Anda mungkin harus menangani pekerjaan tambahan. Tetapi pastikan untuk memenuhi tanggung jawab pekerjaan Anda dengan baik, dan juga menghindari keterlambatan penyelesaian tugas Anda. Scorpio mungkin harus melakukan semua upaya untuk mencapai target mereka dalam perdagangan atau bisnis. Kekhawatiran juga dapat muncul dalam pikiran Anda, tentang penugasan atau rencana baru. Tetapi kerangka berpikir positif Anda dan kemampuan Anda untuk bertindak cepat dapat bekerja untuk keuntungan pasti Anda." , 
		"Masalah uang mungkin perlu diwaspadai. Aliran pendapatan mungkin rata-rata, sedangkan Anda mungkin harus menghabiskan banyak pengeluaran untuk memenuhi kebutuhan pribadi Anda. Biaya untuk hiburan dan barang-barang mewah juga cenderung sangat tinggi." ,
		"Anda disarankan untuk mengonsumsi makanan bergizi dan secara ketat mengikuti saran medis untuk menjaga kebugaran Anda. Anda mungkin juga harus melakukan latihan fisik secara teratur, dan ini juga akan membantu meningkatkan kesehatan Anda." ,
		"9, 10, 11, 13, dan 22");

		//Zodiak Sagitarius
	$ramal9 = new Ramal("" , "" , "" , 
		"Jujur , terbuka , Optimis dan mencintai kebebasan , Selera humor yang tinggi dan filosofikal" , 
		"Sebuah pekerjaan yg diselesaikan dgn baik akan memberikan penghargaan. Semakin banyak yg anda kerjakan di hari ini, semakin baik untuk perkembangan masa depan." , 
		"Zodiak ini sulit puas dan selalu mencari pengalam baru dihidupnya membuat zodiak ini sulit untuk melakukan komitmen dalam waktu yang lama." , 
		"Kemajuan karier semakin dekat, dan Anda mungkin mendapatkan hasil yang menguntungkan dalam semua aktivitas terkait pekerjaan Anda. Otoritas Anda juga akan senang dengan pekerjaan Anda dan tetap berhubungan langsung dengan Anda. Tetap disarankan agar Anda memeriksa dan memverifikasi apa pun yang Anda lakukan, lebih dari sekali, dan ini dapat membantu Anda meningkatkan output. Masa-masa sulit terlihat bagi para pebisnis Sagitarius. Lebih baik untuk menghindari memulai usaha kemitraan baru di bulan ini. Orang mungkin juga mencoba menipu Anda, dan Anda mungkin harus berhati-hati tentang hal ini. Jadi, sangat ideal untuk berpikir dengan baik dan mempertimbangkan semua aspek dengan cermat sebelum mengambil keputusan terkait perdagangan atau bisnis." , 
		"Kondisi keuangan Anda akan baik, dan Anda mungkin dapat memenuhi semua kebutuhan Anda dengan nyaman melalui tabungan Anda. Tetapi masih lebih baik bagi Anda untuk berpikir dengan bijak sebelum melanjutkan dengan tindakan apa pun yang memiliki implikasi moneter." ,
		"Kesehatan mungkin memerlukan perhatian. Anda dapat pulih dari beberapa penyakit dan dapat memperoleh kembali kesehatan selanjutnya. Keberhasilan dan kebahagiaan Anda dapat meningkatkan tingkat kebugaran Anda, dan Anda mungkin dapat menikmati kehidupan yang bebas ketegangan dan damai." ,
		"4, 6, 15, 17, 30, dan 31");

		//Zodiak Capricorns
	$ramal10 = new Ramal("" , "" , "" , 
		"Pandai Mengontrol Diri, Bertanggung Jawab, Pendiam, Ambisius, Materialis, Gengsi Tinggi, dan Suka Memerintah" , 
		"Tak usah sedih atau kecewa, hanya kesalahpahaman saja, kok. Karier: Tak usah cari penyakit dengan perang melawan bos. Cari waktu yang tepat agar opini Anda bisa diterima. Sekarang, tampaknya Anda sendiri juga kurang siap atau pede. Keuangan: Cukup aman. Asmara: Kalau ingin diseriusi, kenali dulu dia lebih baik. Pria Capricorn: Waktu Anda cukup tersita untuk pekerjaan." , 
		"Sifat Pelit Capricorn bisa jadi bikin pasangan ilfeel. Sebagai zodiak pekerja keras, Capricorn lebih senang mencari uang daripada menghabiskannya. Jadi sebaiknya kamu kurangi sedikit sifat pelitmu karena pelit dan sedang berhemat itu berbeda." , 
		"Anda dapat menikmati waktu yang memuaskan. Tetapi Anda mungkin harus memikul tanggung jawab tambahan sekarang, dan karenanya, khususnya tentang melepaskan mereka dengan komitmen penuh. Penghargaan yang Anda dapatkan untuk kinerja Anda akan memberi Anda banyak kepuasan dan kebahagiaan. Sementara itu, aktivitas bisnis dan perdagangan akan mendapatkan arti penting dalam skema Anda. Anda juga dapat memperoleh banyak dukungan sosial untuk meningkatkan prospek bisnis. Anda dapat melakukan tour jarak jauh, dan ini dapat membantu Anda mendapatkan investasi untuk aktivitas perdagangan Anda." , 
		"Anda mungkin memiliki kelancaran dalam hal uang. Tabungan Anda dapat membantu memenuhi komitmen moneter Anda. Tetapi Anda mungkin harus mengeluarkan pengeluaran yang sia-sia saat mencoba memenuhi kebutuhan harian Anda. Jadi lebih baik bagi Anda untuk berpikir dua kali sebelum melakukan aktivitas apa pun yang melibatkan uang." ,
		"Kesehatan mungkin rata-rata. Anda disarankan untuk menambahkan banyak buah-buahan dan sayuran hijau dalam diet Anda, dan ini dapat meningkatkan energi dan kekuatan Anda. Ini juga dapat meningkatkan daya tahan Anda, yang, pada gilirannya, dapat mengatasi segala penyakit ringan. Meditasi juga dapat membantu Anda tetap sehat dan bugar." ,
		"9, 15, 16, 29, 33, dan 40");

		//Zodiak Aquarius
	$ramal11 = new Ramal("" , "" , "" , 
		"Cepat Bosan, Humanis dan terbuka , Original(menyukai hal-hal orisinil) , Kreatif , Independent dan intelektual" , 
		"Bukan hari yg tepat untuk membuka rahasia anda. Pihak lain mungkin akan tergganggu dgn sikap diam anda pada awalnya. Perubahan bisa membawa dampak baik, jadi tak perlu menahan yg datang." , 
		"Sifat pandai bergaul dari zodiak ini membuat Aquarius punya banyak kelompok pertemanan. Gak jarang mereka akan lebih meluangkan waktu untuk teman - temannya daripada sama pacar. Aquarius yang tidak terlalu romantis juga bisa dengan mudah melupakan urusan asmaranya." , 
		"Anda akan dapat menangani semua masalah terkait pekerjaan dengan keberanian dan kepercayaan diri, dan ini dapat membantu Anda mencapai kemajuan yang mantap dalam karier. Anda juga dapat melaksanakan tanggung jawab pekerjaan Anda dengan baik, dan memenangkan penghargaan. Hubungan Anda dengan bawahan juga akan ramah. Dalam hal bisnis, Aquarius mungkin tidak berupaya dengan potensi penuh, dan ini dapat memengaruhi kemajuan dalam bisnis, sampai batas tertentu. Jadi, Anda harus mencurahkan perhatian khusus pada bisnis Anda dan kemajuannya, dan ini akan memberi Anda hasil yang baik. Juga, cobalah untuk menjaga hubungan baik dengan atasan, dan ini bisa mendapatkan dukungan mereka, untuk Anda." , 
		"Keuangan Anda biasanya stabil, tetapi Anda tidak dapat mengharapkan banyak kemajuan dalam hal ini. Anda harus tetap dapat memenuhi semua pengeluaran Anda dengan bantuan tabungan Anda." ,
		"Kesehatan mungkin rata-rata saja dan mungkin memerlukan perhatian. Anda harus mengambil semua tindakan pencegahan agar tetap kuat dan bugar. Sementara kontrol diet adalah suatu keharusan di bulan ini, berlatih yoga dan meditasi, dapat membantu Anda menjaga kebugaran." ,
		"8, 10, 11, 29, 40, dan 42");

		//Zodiak Aquarius
	$ramal11 = new Ramal("" , "" , "" , 
		"Kepedulian Tinggi , Berjiwa Artistik, Bijaksana, Sensitif , Intuitif dan simpatik" , 
		"Menghabiskan waktu bersama teman atau tetangga akan memberikan informasi berguna. Berikan waktu untuk menikmati liburan dgn seseorang yg hati anda dambakan." , 
		"Zodiak ini kerap kesusahan untuk berhenti mencemaskan banyak hal. Satu masalah bisa merembet ke berbagai hal bagi seorang pisces. Hati - hati kalau membiarkan masalah kecil ada dalam hubunganmu karena masalah itu bisa jadi besar" , 
		"Ini mungkin waktu yang tepat bagi pekerja untuk membuat perjanjian baru. Kerangka pikiran positif dan kemampuan Anda untuk bertindak cepat dapat memberikan Anda dunia yang baik. Ini dapat memastikan kemajuan karir, dan usaha Anda dalam hal ini juga dapat menemui kesuksesan. Cara berpikir mandiri dan berani Anda akan sangat mendukung pertumbuhan bisnis Anda. Hal ini dapat menyebabkan kemajuan dalam perdagangan, meskipun hasilnya akan tertunda. Anda dapat meluncurkan bisnis kemitraan baru, dan ini mungkin terbukti menguntungkan." , 
		"Prospek keuangan menjanjikan, dan Anda bisa mengharapkan kemajuan bertahap dalam masalah uang. Anda dapat memperoleh keuntungan melalui penjualan properti, dan semua upaya Anda untuk menghemat uang akan berhasil dengan mudah." ,
		"Ada kemungkinan Anda mengabaikan kesehatan karena tekanan pekerjaan. Ini sangat ideal bagi Anda untuk mengikuti saran medis tanpa gagal dan juga mengkonsumsi makanan bergizi. Latihan sederhana juga dapat membantu Anda tetap bugar." ,
		"5, 6, 11, 12, 20, dan 31");