<?php
     require "bio.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="biografi.css">
</head>
<body>
	<?php
		$home = "home";
		$about = "about";
		$contact = "contact";
	?>
	<nav class="navbar">
		<div class="max-width">
			<div class="logo"><a href="#"> <span>My.</span>Profil</a></div>
			<ul class="menu">
				<li><a href="#<?php echo $home ?>" class="menu-btn">Home</a></li>
				<li><a href="#<?php echo $about ?>" class="menu-btn">About</a></li>
				<li><a href="#<?php echo $contact ?>" class="menu-btn">Contact</a></li>
			</ul>
			<div class="menu-btn">
				<i class="fas fa-bars"></i>
			</div>
		</div>
	</nav>

	<section id="<?php echo $home ?>">
		<div class="row">
			<div class="column">
			  <img src="ferry de vinzy2.jpg" alt="Foto">
			</div>
			<div class="column">
				<h1 style="font-family: 'Poppins'"><span>Welcome </span>To <span>My </span> Website<span>!</span></h1>
				<h1> I'am Ferry Trilaksana Putra. Umur <?php echo $umur?></h1>
			  <p style="font-family: 'Poppins'">You can't connect the dots looking forward; you can only connect them looking backward. So you have to trust that the dots will somehow connect in your future.</p>
			  <p style="font-family: 'Poppins'"><span>"Its not the years in your life that count. Its the life in your years."</span></p>
			</div>
		  </div>
	</section>

	<section id="<?php echo $about ?>">
		<h1 style="font-family: 'Poppins'", align="center", >ABOUT <span>ME!</span></h1>
		<p style="font-family: 'Poppins'">Halo!! Saya Ferry Trilaksana Putra, saya lahir pada tanggal 10 Mei 2002. Saya berkuliah di jurusan Teknik Informatika, saya memiliki Skill di bidang editing dan desain grapich. 
		Untuk saat ini saya masih duduk di bangku kuliah Semester 4. Setelah lulus nanti saya berharap setelah lulus dari jurusan yang saya pilih, saya mampu menguasai ilmu yang telah disampaikan oleh bapak/ibu dosen.
		Disaat saya berkuliah terdapat berbagai pengalaman yang saya dapatkan, baik dari akademik maupun non akademik, sebagai contoh yakni mengikuti organisasi. Organisasi sendiri merupakan suatu wadah yang menurut saya,
		dapat menumbuhkan rasa saling perduli dan membangun kerja sama yang baik. Sedangkan akademik saya pernah mengikuti GDSC, GDSC merupakan suatu komunitas untuk membuat suatu web, dapat dikatakan Web Development.
		Non akademik sendiri, saya menjabat sebagai Anggota Departement Advokesma di suatu himpunan mahasiswa jurusan, biasa disingkat dengan HIMATIFA.</p>

		<p style="font-family: 'Poppins'", >Dalam pengalaman yang saya dapat dari organisasi (non akademik) dan komunitas (akademik) cukup banyak, antara lain saya mendapat nilai kebersamaan, kekeluargaan, dan belajar bekerja sama dalam tim.
			untuk pengalaman yang saya dapat dalam komunitas bersangkutan dengan keterampilan akademik, yakni menambah soft skill, seperti : Bahasa HTML, Java Script, dan CSS. Saya jelaskan secara singkat, mulai dari HTML.
			HTML merupakan suatu kumpulan kode yang sudah terkonverensi oleh komputer, sehingga tidak dapat disebut bahas pemrograman karena itu merupakan bahasa dasar komputer. Sedangkan CSS merupakan suatu aspek pendukung 
			untuk memperindah dan mempercantik sebuah website, agar terlihat lebih rapi. Sedangkan JavaScript merupakan suatu bahasa pemrograman yang mendukung untuk pembuatan HTML guna membuat suatu metode backend. Berikut
			adalah rating capaian saya tentang HTML, CSS, dan JavaScript :
		</p>
		<div class="container">
			<div class="skill-label">HTML</div>
			<div class="skill-bar">
				<div class="skill-level" style="width: 80%;"></div>
			</div>
			<div class="skill-label">CSS</div>
			<div class="skill-bar">
				<div class="skill-level" style="width: 60%;"></div>
			</div>
			<div class="skill-label">JavaScript</div>
			<div class="skill-bar">
				<div class="skill-level" style="width: 40%;"></div>
			</div>
		</div>
	</section>

	<section id="<?php echo $contact?>">
		<h1 style="font-family: 'Poppins'", align="center"><span>MY.</span>CONTACT</h1>
		<div class="sosial">
			<a href="mailto:contoh@domain.com"><img src="mail.png" width="128" height="128"  alt="Email"></a>
			<a href="tel:+6285231246250"><img src="telephone.png" width="128" height="128" alt="Telepon"></a>
			<a href="https://www.facebook.com/Ferry Trilaksana" target="_blank"><img src="facebook.png" width="128" height="128" alt="Facebook"></a>
			<a href="https://www.twitter.com" target="_blank"><img src="twitter.png" width="128" height="128" alt="Twitter"></a>
		</div>
	</section>
	
</body>
</html>