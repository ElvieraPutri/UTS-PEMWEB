<?php

class Shio {
	public $nama_shio,
			$kep,
			$ramalanjodoh,
			$ramalankarir,
			$ramalankeuangan,
			$ramalankesehatan,
			$angkakeb;

	public function __construct( 
		$nama_shio, $kep, $ramalanjodoh, $ramalankarir, $ramalankeuangan, $ramalankesehatan, $angkakeb ) {

			$this->nama_shio = $nama_shio;
			$this->kep = $kep;
			$this->ramalanjodoh = $ramalanjodoh;
			$this->ramalankarir = $ramalankarir;
			$this->ramalankeuangan = $ramalankeuangan;
			$this->ramalankesehatan = $ramalankesehatan;
			$this->angkakeb = $angkakeb;
	}

	public function __toString() {
			return "Nama Shio : " . $this->nama_shio . " <br>Kepribadian : " . $this->kep . "<br><br> Ramalan Jodoh : " . $this->ramalanjodoh . "<br><br>Ramalan Karir : " . $this->ramalankarir . "<br><br>Ramalan Keuangan : " . $this->ramalankeuangan . "<br><br>Ramalan Kesehatan : " . $this->ramalankesehatan . "<br><br>Angka Keberuntungan : " . $this->angkakeb;
	}
}

//Shio Tikus
	$shio1 = new Shio("Tikus" , 
		"kepribadian sosial, lucu, pintar, menawan, mudah beradaptasi, murah hati, serakah, dan egois." , 
		"Prediksi cinta shio tikus menunjukkan bahwa kehidupan cinta para tikus menunjukkan tren negatif di sepanjang tahun ini. Anda akan cenderung bertindak lebih spontan di tahun ini, yang mungkin akan menambah kegembiraan dalam kehidupan romansa." , 
		"Shio tikus perlu memaksakan diri mereka untuk sukses di tempat kerja. Saat bekerja, pikirkan bagaimana pekerjaan akan memengaruhi Anda dan kehidupan Anda di masa depan. Di tahun tikus logam ini akan membuat usaha maupun bisnis lebih sulit terselesaikan dibanding tahun lalu. Pemilik shio tikus juga diprediksi akan memiliki beban kerja yang lebih berat di tahun ini. Apabila ada proyek penting, sebaiknya fokus dulu pada hal tersebut." , 
		"Ramalan keuangan shio tikus di tahun 2020 memprediksi bahwa akan ada pengeluaran yang tidak terduga di tahun ini (ada pengeluaran/modal). Pastikan Anda memiliki dana simpanan yang cukup untuk membiayainya. Gunakan uang Anda dengan bijak untuk membayar lunas semua hutang, karena itu akan menimbulkan rasa tidak nyaman. Simpan sisanya dalam bentuk tabungan/investasi." , 
		"Untuk kesehatan, mereka yang bershio tahun tikus diprediksi kurang lebih akan sama seperti tahun lalu. Namun bukan berarti Anda menjadi malas untuk datang mengontrol kesehatan Anda secara rutin, terutama jika saat ini Anda sudah mengidap penyakit berat, seperti diabetes, stroke, dan sebagainya. Mengabaikan hal ini hanya akan membuat penyakit Anda memburuk. Berolahraga dan jaga pola makan dengan benar. Pastikan untuk cukup istirahat agar stres dan sakit kepala tidak datang menghampiri." ,
		"2 dan 3");

	//Shio Kerbau
	$shio2 = new Shio("Kerbau" , 
		"pekerja keras, bisa diandalkan, dapat dipercaya, serius, mandiri, penyabar, simpel, dan suka menyendiri" , 
		"tahun ini terjadi fluktuasi (naik-turun), membuat hubungan baru, atau justru berakhirnya sebuah hubungan. Jika dipetakan dalam garis, kehidupan sosial Anda akan terlihat seperti deretan bukit tahun ini. Anda mungkin merasa lebih ekspresif di tahun ini, atau mungkin ingin tahu lebih banyak tentang pasangan Anda tahun ini. Tidak peduli apa yang Anda rasakan, Anda pasti ingin beberapa perubahan. Atau, pasangan Anda yang akan menginginkan beberapa perubahan. Ini dapat menyebabkan hal-hal menjadi lebih baik dalam hubungan Anda, atau justru menjadi lebih buruk di tahun tikus ini." , 
		"kehidupan dunia kerja Anda akan relatif tenang tahun ini. Proyek-proyek akan datang dan pergi, tetapi Anda harus harus cukup stabil untuk menanganinya. Akan ada perasaan bahwa perubahan sudah dekat, yang bisa jadi benar. Cobalah untuk mencari tahu apa pun tentang masa depan karier Anda. Berbicara dengan rekan kerja dan atasan adalah cara yang bagus untuk mencari tahu apa yang sedang terjadi di tempat kerja Anda. Beberapa tantangan akan menghampiri Anda, tetapi tidak ada yang tidak dapat Anda tangani." , 
		"Anda harus mengatur keadaan finansial Anda dalam 4 bulan pertama di tahun ini. Dengan melakukan ini, Anda akan membuat sisa tahun menjadi jauh lebih mudah untuk dilewati. Investasikan sisanya pada saham, emas, atau pada valas. Karena biasanya pada pertengahan tahun, mata uang kuat cenderung lebih stabil & meningkat, sehingga di akhir tahun Anda bisa menjualnya dengan nilai tukar yang lebih baik." , 
		"Anda akan merasa memiliki lebih banyak energi di tahun ini. Anda tidak perlu terlalu mengkhawatirkan kesehatan Anda tahun ini, tidak akan ada masalah yang serius. Sebaliknya, Anda harus fokus pada kesehatan mental Anda (stres). Cobalah untuk mulai berolahraga secara rutin untuk menyalurkan sisa tenaga yang berlebih itu, namun jangan memaksakan diri. Atur pola makan rendah kalori, batasi makanan yang bisa memicu darah tinggi, dan hindari minum2 dan merokok." ,
		"1 dan 4");

	//Shio Macan
	$shio3 = new Shio("Macan" , 
		" memiliki kharisma, kuat secara fisik dan mental, ambisius, agresif, berani, mandiri, dan bertanggung jawab." , 
		"Jika Anda masih lajang, maka jadilah diri Anda sendiri, dan cari seseorang yang memiliki banyak sifat2 kesamaan dengan kepribadian Anda. Carilah pasangan yang bisa menutupi kekurangan Anda. Tahun 2020 adalah tahun kesuksesan dalam hidup dan hubungan. Jangan bergaul dengan orang yang membuat Anda mudah marah. Pertahankan teman yang menginspirasi Anda, sebaliknya, BUANG mereka yang melakukan hal sebaliknya. Anda harus tetap tenang dan tidak terlalu cemas ketika berbicara dengan pasangan." , 
		" ini adalah tahunnya Anda! Bintang Anda akan bersinar di sepanjang tahun ini. Ini adalah salah satu bidang dalam hidup Anda, yang tidak perlu Anda ubah untuk unggul. Peluang untuk promosi atau mendapatkan bonus cukup tinggi di tahun ini. Semua akan membaik ketika sejak bulan-bulan pertama di tahun berjalan " , 
		"Di tahun tikus ini, akan ada perubahan dalam isi dompet keuangan Anda. Meski nantinya Anda akan memiliki pengeluaran yang sama besarnya dengan tahun lalu, namun Anda cenderung lebih bahagia saat membelanjakan uang. Setiap masalah keuangan yang Anda temui akan diselesaikan dengan mudah. Pemasukan Anda akan sangat stabil di tahun ini, jadi jangan terlalu khawatir." , 
		"Anda akan memiliki banyak energi tahun ini. Anda juga akan sedikit lebih impulsif dari sebelumnya. Inilah yang Anda butuhkan untuk mendorong diri sendiri, dalam membuat perubahan dalam hidup! Pertahankan diet & olahraga rutin yang telah Anda jalani tahun lalu. Namun, pastikan Anda tidak terlalu memaksakan diri secara fisik, atau itu bisa berakhir dengan cedera" ,
		"1, 3, dan 4");

	//Shio Kelinci
	$shio4 = new Shio("Kelinci" , 
		"dekat dengan keluarga, tulus, penyayang, adil, banyak kawan, berjiwa sosial, cukup emosional, cerdas, dan cinta damai. Namun mereka juga memiliki sifat ragu-ragu." , 
		"kelinci jantan maupun betina tidak akan melihat banyak peningkatan tahun ini. Peluang bertemu pasangan yang tepat pun akan jarang terjadi bagi mereka. Anda mungkin memiliki citra pasangan yang sempurna dalam pikiran, namun jangan buang waktu Anda untuk mencari orang ini tahun ini, hanya karena mereka tidak memenuhi semua kriteria Anda (shio ini terkenal paling pemilih, diantara shio2 yang lain)." , 
		"harus belajar lebih banyak pengetahuan yang berhubungan dengan pekerjaan/usaha tahun ini. Atau, pelajari keterampilan baru yang berhubungan / mendukung dengan pekerjaan. Rekan kerja Anda bisa menjadi aset terbesar di tempat kerja, di tahun ini. Pemilik shio kelinci disarankan agar tetap bekerja pada tujuan mereka sebelumnya di tahun 2020 nanti. Ini seperti “tahun kesadaran” bagi mereka. Bukan waktu yang tepat untuk mengambil langkah pada hal-hal baru." , 
		"Anda diminta untuk melunasi hutang lama (termasuk utang budi juga), yang mungkin Anda miliki. Utang ini cenderung membuat Anda stres dan membebani Anda, jika tidak segera melunasinya. Atur anggaran Anda, dan coba untuk menyeimbangkannya di tahun ini. Hati-hati, banyak pengeluaran siap menanti di pertengahan tahun! Ini bukan tahun keberuntungan Anda secara finansial. Waspada terhadap aset yang Anda investasikan." , 
		"Semua pekerjaan yang Anda lakukan pasti membuat stres. Cobalah untuk menghabiskan lebih banyak waktu di luar ruangan, dan kurangi waktu di depan layar monitor tahun ini. Ini bisa mendorong Anda untuk beraktivitas outdoor lebih banyak. Hal ini akan membuat mata Anda lebih sehat, dan juga menghindarkan Anda dari sakit kepala. Makan makanan rendah kalori adalah penting tahun ini. Jangan makan terlalu banyak makanan berlemak, atau makanan yang mengandung gula, jika tidak, siap-siap mendapatkan bonus penyakit dalam yang serius di tahun ini." ,
		"3, 4 dan 6");

	//Shio Naga
	$shio5 = new Shio("Naga" , 
		"Kuat, beruntung dalam segala hal (setara keberuntungan shio kelinci), mudah bersahabat, berwibawa, adil, royal. Cerdas, Berjiwa pemimpin, angkuh, egois, dan suka pamer" , 
		"Anda akan memiliki hubungan yang santai. Tetapi itu tidak berarti bahwa itu akan membosankan. Menjaga hal-hal menarik dan baru, adalah cara yang bagus untuk membuat hubungan Anda lebih baik. Jika Anda lajang, maka spontanitas adalah cara yang bagus untuk menemukan pasangan baru. Cobalah hal-hal baru, pergi ke tempat-tempat baru, Anda pasti akan bertemu dengan beberapa orang yang menarik." , 
		"Akan banyak peluang baru akan muncul di tempat kerja Anda di tahun 2020. Ini adalah waktu yang tepat untuk bergaul dengan atasan Anda jika Anda mencari promosi. Pengusaha mencintai orang2 dengan keterampilan kerja tim yang hebat. Cobalah untuk fokus pada 1 tujuan besar Anda di tahun 2020 ini." , 
		"Akan ada beberapa pengeluaran tidak terduga yang harus dihadapi para naga di pertengahan tahun ini, yang berhubungan dengan utang masa lalu, atau pengeluaran kesehatan. Buatlah persiapan diawal tahun, atau itu akan mengacaukan rencana Anda. Ikut asuransi kesehatan juga merupakan sebuah langkah yang baik, untuk memproteksi atau meminimalisir pengeluaran yang tidak terduga itu. Hati2 jika ingin berinvestasi di bidang properti" , 
		"Anda perlu berolahraga, untuk mencegah penyakit yang berhubungan dengan tulang/sendi. Buatlah jadwal untuk diri sendiri agar menjaga rutinitas. Jaga pola makan diet seimbang. Cobalah untuk mengurangi tingkat stres Anda di pertengahan tahun, atau Anda akan beresiko tinggi terkena penyakit." ,
		"1, 6, dan 7");

		//Shio Ular
	$shio6 = new Shio("Ular" , 
		"Berpemikiran tajam, insting kuat, cukup cerdas, pencemburu, ambisius, pemalu, dan diplomatis, pontan, angkuh dan tidak bisa dipercaya" , 
		"Akan ada banyak perubahan dalam kehidupan cinta Anda tahun ini, tetapi sebagian besar perubahan justru berasal dari dalam diri Anda. Entah dipicu oleh apa, Anda akan merasa lebih emosi tahun ini. Ini akan sangat beresiko, jika pasangan Anda juga mudah terpicu, dan meledak bersama. Sepertinya, ini adalah tahun yang baik bagi para lajang untuk segera mencari dan menemukan pasangan yang cocok, yang mengerti diri Anda" , 
		"Akan ada lebih banyak peluang untuk kemajuan di tempat kerja, ataupun pada usaha yang Anda geluti pada tahun 2020. Buktikan diri Anda hebat dalam banyak hal. Anda hampir pasti akan mendapatkan promosi atau kenaikan gaji di tahun ini . Bekerja keras tahun ini akan meningkatkan level kehidupan Anda." , 
		"Hindari pembelian dan pembelanjaan secara impulsif (berlebihan), jika masih ingin menjaga keseimbangan anggaran Anda. Melakukan pembelian kecil untuk diri sendiri seharusnya tidak menimbulkan masalah. Keuangan Anda akan cukup stabil di tahun ini, setidaknya untuk melakukan sekali – dua kali trip perjalanan liburan bersama keluarga. Investasikan uang Anda pada saham, emas, valas, atau properti. Tahun 2020 akan menjadi tahun yang stabil untuk itu." , 
		" Anda akan merasa sedikit lebih lelah dari biasanya di tahun tikus ini, yang berarti Anda perlu beristirahat lebih banyak. Ini hanya akan berlangsung selama beberapa bulan pertama tahun ini. Lakukan hal-hal penting, selagi Anda masih punya energi untuk melakukannya. Makan makanan berserat, karena ada potensi gangguan pencernaan di tahun ini. Hindari alkohol, jangan makan/minum terlalu banyak, dan hati-hati dengan cidera lama" ,
		"2, 8, dan 9");

		//Shio Kuda
	$shio7 = new Shio("Kuda" , 
		"Energik, yang suka hal2 yang aktif, mudah bersahabat, berjiwa sosial, karismatik, tapi tidak sabaran dan sulit diatur (dikekang)" , 
		"Kehidupan cinta Anda diprediksi tidak akan terlalu menggairahkan tahun ini. Anda perlu membuat perubahan menarik dalam hubungan, jika ingin mempertahankan keharmonisan bersama pasangan. Untuk wanita bershio kuda, mereka umumnya akan menjadi lebih populer di tahun 2020, dan akan mudah untuk menetapkan sebuah hubungan dengan orang yang dicintai. Sementara untuk pria bershio ini, mereka akan menderita dari tekanan cinta yang besar, dan hanya ada sedikit kemajuan yang bisa dibuat dalam hubungan." , 
		"tahun ini akan ada hambatan dalam karier/ bisnis Anda, dengan satu atau lain cara. Anda perlu melakukan sesuatu diluar kebiasaan, dan berhati2 untuk mengatasi hal ini. Alih-alih memaksakan diri, akan lebih baik untuk stay sejenak, dengan meningkatkan atau menambah keterampilan skill, yang berhubungan dengan kerja/usaha Anda." , 
		"Jika Anda memiliki masalah keuangan, maka Anda harus mencoba menyelesaikannya, sebelum melakukan pembelian (pengluaran lain) yang lebih besar. Anda disarankan untuk mengelola anggaran lebih bijak di tahun ini. Hindari investasi yang berisiko tinggi, dan akan lebih baik menilai sendiri hal-hal itu," , 
		"Di tahun 2020 ini merupakan tahun untuk menyingkirkan kebiasaan buruk Anda! Saatnya memulai pola kehidupan yang lebih positif. Berhenti merokok, dan lakukan hal2 yang santai, seperti latihan yoga atau meditasi. Ini adalah tahun untuk mencoba sesuatu yang lebih tenang, untuk keluar sejenak dari permasalahan dunia ini. Hindari aktivitas outdoor yang berlebihan, seperti mendaki gunung, atau olahraga ekstrim lainnya seperti paralayang atau bungee jumping." ,
		"2, 3, dan 7");

		//Shio Kambing
	$shio8 = new Shio("Kambing" , 
		"Cerdas, kreatif, mudah bersosialisasi, berjiwa seni, mudah panik, namun keras kepala" , 
		"Anda cenderung lebih spontan tahun ini, kehidupan cinta Anda juga akan lebih spontan. Jika Anda lajang, maka inilah saatnya Anda untuk lebih agresif terhadap pasangan. Hal-hal akan menjadi panas dan bersemangat tahun ini untuk para kambing. Sementara kehidupan romantis Anda akan semakin cepat, kehidupan sosial Anda dengan teman-teman dan keluarga Anda akan melambat di tahun ini. Anda juga akan memiliki lebih BANYAK tanggung jawab dengan masalah keluarga." , 
		"Karier Anda akan mengalir dengan lancar tahun ini, selama Anda mengenal atasan dan rekan kerja Anda dengan lebih baik. Orang-orang ini akan menjadi batu loncatan yang Anda butuhkan, jika Anda ingin dalam karier Anda. Anda dapat menggunakan ide-ide kreatif di tempat kerja, dengan cara yang produktif. Bakat/keahlian khusus akan membantu Anda menonjol di tempat kerja." , 
		"Keuangan Anda diprediksi masih cukup stabil di sepanjang tahun 2020 ini. Anda memiliki cukup uang untuk membiayai semua pengeluaran dengan mudah. Anda bahkan memiliki uang untuk melakukan trip wisata bersama keluarga. Anggaran dengan hati-hati, dan Anda pasti akan memiliki cukup uang untuk keperluan dan hal-hal menyenangkan dalam hidup juga." , 
		"Kesehatan Anda mungkin sedikit menurun tahun ini. Jika Anda ingin mencoba untuk sedikit meredam penurunan ini, cobalah mempertahankan kondisi fisik Anda. Mulailah berolahraga, makan makanan yang lebih sehat, dan mengurangi tingkat stres, adalah cara terbaik untuk melakukan ini. Akan ada masalah tersembunyi dengan perut dan sistem pencernaan." ,
		"2 dan 7");

		//Shio Monyet
	$shio9 = new Shio("Monyet" , 
		"Cerdas, kepribadian menarik, mudah beradaptasi, banyak akal, penyayang, sangat aktif, namun memiliki sifat hedonisme dan impulsif." , 
		"mereka yang bershio monyet cenderung merasa memiliki kontrol lebih besar (dominan) atas pasangan mereka pada tahun 2020. Tidak peduli apa pun status hubungan Anda di tahun ini, Anda harus mencoba meningkatkan keterampilan komunikasi. Jangan menjadi penekan juga. Menemukan zona menengah yang baik untuk ini" , 
		"Anda harus lebih kreatif ketika dibutuhkan di tempat kerja. Pastikan Anda bertanya kepada atasan sebelum mencoba sesuatu yang baru, untuk memastikan bahwa itu tidak akan memengaruhi Anda secara negatif nantinya. Cobalah untuk menyeimbangkan pekerjaan dan kehidupan rumah Anda. Jangan membawa masalah keluarga Anda ke kantor, dan jangan membawa pulang pekerjaan Anda ke rumah, kecuali itu sangat penting." , 
		"Keuangan Anda perlahan akan membaik. Namun Anda perlu waspada dalam hal investasi yang berhubungan dengan air. Ketika berada di rumah, adalah ide bagus untuk mencoba mengerjakan hobi Anda yang bisa menghasilkan uang." , 
		"Anda diprediksi tidak akan mengalami sesuatu yang fatal. Meski begitu, Anda akan menjadi cukup sibuk dengan berbagai aktivitas di tahun ini, jadi pastikan untuk menjaga kesehatan Anda, agar tidak ambrol di akhir tahun. Kalau sudah begitu, maka akan keluar lagi pengeluaran untuk berobat. Jangan memaksa diri Anda secara berlebihan, jika tahu tidak dapat mengatasinya!" ,
		"4 dan 9");

		//Shio Ayam
	$shio10 = new Shio("Ayam" , 
		"Perfeksionis, bisa dipercaya, pekerja keras, percaya diri, jago berkomunikasi, suka tantangan, pandai bergaul, sedikit egois, suka pamer, dan tidak mau kalah" , 
		"Anda akan memiliki emosi yang lebih tinggi dalam kehidupan keseharian. Cobalah untuk menjadi lebih tenang dalam kehidupan cinta Anda tahun ini. Jalan-jalan bersama pasangan atau keluarga mungkin bisa membuat suasana hati Anda menjadi lebih enak. Jika Anda masih lajang, cobalah mencari tahu apa yang Anda inginkan dari pasangan, sebelum Anda mencari orang lain. " , 
		"Anda akan merasa lebih impulsif di tempat kerja tahun ini. Anda kemungkinan tidak akan memiliki banyak proyek (tantangan) baru tahun ini. Memamerkan keterampilan Anda juga merupakan ide yang bagus untuk menariknya. Selalu berpikir ke depan ketika sedang bekerja. Apa yang Anda lakukan sekarang. dapat sangat memengaruhi apa yang akan terjadi pada beberapa tahun dari sekarang dalam karier/usaha." , 
		"Tidak ada kekayaan besar yang bisa dibuat di tahun ini. Anda perlu mengikuti aturan, dan tidak melakukan investasi yang berisiko, atau Anda akan membayar mahal harganya di akhir tahun. Anda cenderung bekerja lebih banyak, untuk menghasilkan lebih banyak di tahun ini.." , 
		"Semakin optimis Anda, semakin besar kemungkinan Anda merasa lebih bersemangat. Anda mungkin mengalami beberapa cedera ringan, dan masalah kesehatan penyakit dalam. Tetapi tidak ada hal besar yang diperkirakan akan terjadi. Cobalah untuk menjaga diet rendah gula, dan aktif dalam bergerak untuk mencegah kekakuan sendi." ,
		"5, 7, dan 8");

		//Shio Anjing
	$shio11 = new Shio("Anjing" , 
		"Kepribadian positif seperti setia kawan, jujur, temperamental, memiliki insting tajam, mudah bersahabat dan loyal." , 
		"Masalah apa pun yang Anda miliki di tahun lalu, cenderung akan menghilang secara perlahan di tahun ini. Anda akan menemukan hubungan (status) yang lebih jelas di tahun ini. Ini akan membantu Anda yang sedang menjalin hubungan dengan pasangan." , 
		"Anda akan lebih beruntung di tempat kerja tahun ini. Pastikan untuk memperhatikan detail proyek/pekerjaan, atau akan membuat Anda masuk dalam masalah. Jangan lupa tentang tujuan dan impian Anda di tempat kerja. Pekerjaan Anda saat ini tidak akan menjadi tujuan akhir Anda, tapi merupakan batu loncatan untuk mencapai suatu tempat yang lebih besar." , 
		"Anda akan menghasilkan (pendapatan) lebih banyak di tahun ini. Masuknya uang tunai ini dapat membantu Anda dalam menghindari beberapa masalah keuangan di tahun ini." , 
		"Anda akan memiliki banyak energi tahun Anda akan memiliki energi ekstra tahun ini. Tidak akan ada masalah kesehatan serius yang menghampiri Anda. Cobalah untuk menjaga tubuh Anda tetap sehat. Jangan lupa untuk menjaga tingkat stres Anda. Memiliki hobi kreatif dapat membantu dalam ini." ,
		"3, 4 dan 9");

		//Shio Babi
	$shio12 = new Shio("Babi" , 
		"Jujur, penyayang, banyak akal, suka bergaul, namun mudah terpengaruh, materialistis, dan sombong" , 
		"Kehidupan cinta Anda bersama pasangan akan berjalan santai di tahun ini. Berbagai hal akan berjalan dengan lancar dalam hubungan Anda di tahun ini. Hindari ber-argumen berlebih, agar tidak merusak suasana. Ini adalah tahun yang baik bagi para pemilik shio babi untuk menikah," , 
		"Anda cenderung lebih ambisius di tempat kerja tahun ini. Ini adalah waktu yang tepat bagi Anda untuk mendapatkan promosi, atau untuk berpindah pekerjaan. Pastikan tetap berhubungan dengan rekan kerja dan bos Anda; hubungan ini akan membantu Anda untuk maju dalam karier." , 
		"Para pemilik shio babi juga diprediksi akan berangsur2 membaik dalam hal keuangan tahun ini. Namun, jangan tergoda untuk membuang-buang uang untuk hal-hal yang tidak dibutuhkan. Ini akan membawa Anda ke dalam jeratan hutang, seperti hutang kartu kredit. Hati-hati untuk berinvestasi di bidang keuangan, seperti kurs mata uang asing." , 
		"Akan ada beberapa gangguan kesehatan kecil yang akan Anda alami tahun ini. Tetapi diprediksi tidak akan menjadi masalah kesehatan utama. Cobalah untuk memperkuat sistem kekebalan tubuh Anda, dengan mengkonsumsi vitamin dan melakukan diet seimbang. Berolahraga dan tidur yang cukup juga dapat membantu meningkatkan kesehatan." ,
		"2, 5, dan 8");



//	echo $shio1;