<?php
      session_start(); 
?>
<!DOCTYPE html>
<?php
      setcookie("test_cookie", "test", time() + 3600, '/'); 
?>
<html>
<head>
	<title>belajar php</title>
</head>
<body background="404.jpg" text="cyan">
	<p><h1 align="center"><?php echo "Hello World"; ?></h1></p>
	<h1>Konstanta</h1>
	<?php 
	define('Konstanta','Konstanta adalah tetapan nilai dalam aplikasi');
	define('PHI','3.14');
	echo "<p>". Konstanta . "</p>";

	//Identifier
	/* Identifier adalah sebutan lain untuk nama suatu variabel
	- Dimulai dengan tanda dolar $
	- Karakter berikutnya dapat berupa huruf, angka, atau underscore */

	$r = 10;
	echo "<p>Menghitung Luas Lingkaran</p>";
	echo "<p>Jari-jari : " . $r . "</p>";
	$luas = PHI * $r * $r;
	echo "<p>Luas Lingkaran : " . $luas . " </p>";
	echo "<h1>Tipe Data</h1>";
	echo "<h3>Integer<h3>";
	echo "<p>Digunakan untuk menyimpan bilangan bulat</p>";
	$a = 10; //variabel $a memiliki tipe data integer
	echo $a;
	echo "<h3>Double</h3>";
	$b = 16.05; //variabel $b memiliki tipe data double
	echo $b ;
	echo "<h3>Boolean</h3>";
	$jawaban = TRUE ;
	echo $jawaban ; echo "<h3>String</h3>";
	$c = "belajar php"; // Variabel $c memeiliki tipe data string
	echo $c ;
	echo "<h3>Array</h3>";
	echo "<p>Digunakan untuk menyimpan kumpulan data</p>";
	$hari[0] = "Senin";
	$hari[1] = "Selasa";
	$hari[2] = "Rabu";
	$hari[3] = "Kamis";
	$hari[4] = "Jum'at";
	$hari[5] = "Sabtu";
	$hari[6] = "Minggu";

	echo "Sekarang adalah hari $hari[2] <br>"; //meyimpan tanpa perulangan
	for($i=0;$i<=6;$i++){ // menampilkan dengan perulangan
		echo $hari[$i] . "<br/>";
	}
	?>
	<h1>Object</h1>
	<p>Digunakan untuk menyimpan data bertipe object</p>
	<?php
	 class belajar_rpl
	 {
	 	function belajar()
	 	{
	 		return "Hari ini kita melanjutkan pelajaran yang kemarin yaiyu belajar PHP";
	 	}
	 } 
	 $obj = new belajar_rpl();
	 echo "pelajaran harai ini adalah ".$obj->belajar();
	?>
	<h1>Operator</h1>
	<p>Operator digunakan untuk membandingkan nilai cari suatu varaibel terhadap variabel atau nilai yang lain. Beberapa operator dalam PHP ditunjukkan dalam gambar diabwah.</p>
	<img src="operator.JPG">
	<h1>Percabangan</h1>
	<p>Terdapat empat tipe percabangan dalam php.</p>
	<h4>1.if</h4>
	<p>Digunakan jika terdapat satu alternatif yang harus dipilih.</p>
	<?php
	$d = 8;
	if($d < 10)
	{
		$d = $d + 5;
		echo $d;
	} 
	?>
	<h4>2. if...Else</h4>
	<p>Digunakan jika terdapat lebih dari dua alternatif yang harus dipilih.</p>
	<?php
	$e = 16;
	if($e >= 20)
	{
		echo "Kamu sudah bukan remaja lagi";
    }
    else 
    {
    	echo "Kamu masih remaja atau anak-anak";
    }
	?>
	<h4>3. If...Elseif</h4>
	<p>Digunakan jika terdapat lebih dari dua alternatif yang harus dipilih.</p>
	<?php
	$nilai = 55;
	if ($nilai < 60) 
	{
	 	echo "Nilai anda $nilai. Selamat, Anda Telah Lulus dengan nilai biasa saja!!";
	}
	elseif ($nilai >=60 && $nilai <80) 
	{
		echo "Nilai Anda adalah $nilai. Selamat, Anda Telah Lulus dengan nilai lumayan!!";
	}
	else 
	{
		echo "SELAMAT ANDA LULUS DENGAN NILAI LUAR BIASA";
	}
    ?>
    <h4>4. Switch</h4>
    <p>Digunakan jika terdapat banyak alternatif yang harus dipilih/diseleksi.</p>
    <?php
    $f = 1;
    switch ($f)
    {
    	case 1:
    	   echo "RPL";
    	break;
    	case 2:
    	   echo "MM";
    	break;
    	case 3:
    	   echo "TKJ";
    	break;
    	case 4:
    	   echo "AKN";
    	break;
    } 
    ?>
    <h1>Perulangan</h1>
    <h4>1. FOR</h4>
    <p>Sitaks Umum</p>
    <pre>
    	 for(nilai awal, nilai akhir, peningkatan/penurunan ) 
    	 {
    	 	statement;
    	 }  
    </pre>
    <p>contoh</p>
    <?php
    for($g=1; $g <= 10; $g++)
    {
    	echo $g;
    	echo "<br>";
    } 
    ?>
    <h4>2.while</h4>
    <p>Sintaks umum</p>
    <pre>
    	while(kondisi berhenti)
    	{
    		statement;
    	}
    </pre>
    <p>contoh</p>
    <?php
    $h = 1;
    while ($h <= 10) 
    {
      echo $h;
      echo "<br/>";
      $h=$h+1;
    } 
    ?>
    <h4>3. Do...While</h4>
    <p>Sintaks umum</p>
    <pre>
    	do
    	{
    		statement:
    	}
    	while (kondisi berhenti);
    </pre>
    <p>contoh</p>
    <?php
    $i = 1;
    do 
    {
     	echo "Perulangan ke-$i<br>\n";
     	$i++;
    } 
    while ($i <= 10); 
    ?>
    <h1>Cookies</h1>
    <p>Cookies adalah file berukuran sangat kecil yang berada di komputer client (dalam konteks konsep client-server website). File ini berisi data atau informasi tertentu yang berasal dari aktivitas browsing pengunjung website, misalnya informasi login, sejarah website yang dikunjungi, browser yang digunakan, dan lain sebagainya. File ini dapat dipanggil kembali ketika pengunjung website membuka website yang sama dan menggungah informasi yang sama pada saat website dibuka pada waktu lampau. Hal ini memudahkan pengunjung, misalnya tidak perlu login setiap kali membuka sebuah halaman website yang sama.Dalam PHP, sintaks untuk membuat cookies adalah sebagai berikut.</p>
    <img src="cookies.JPG">
    <p>Catatan : setcookie() harus diletakkan sebelum tag html</p>
    <?php
    if (count($_COOKIE) > 0) 
    {
     	echo "Cookies are enabled.";
    } 
    else
    {
    	echo "Cookies are disabled.";
    }
    ?>
    <h1>Session memiliki fungsi yang sama dengan cookies. Hanya saja session akan disimpan di server. Session adalah mekanisme yang digunakan untuk bertukar informasi antar halaman dalam satu website.</h1>
    <p>Buatlah suatu kalkulator rumus luas-luas bidang datar (persegi, persegi panjang, segitiga, jajar genjang, layang-layang, belah ketupat, trapesium dan lingkaran). Kalkulator ini memiliki aturan sebagai berikut. Ketika pengguna memasukkan sebuah nilai minus, sistem tidak akan melakukan protes perhitungan dan memunculkan pesan error.</p>
    <ol>
    	<li>Dhini = Persegi panjang dan jajar genjang.</li>
    	<li>Noel = layang-layang, Belah ketupat.</li>
    	<li>Roni = Persegi dan segitiga.</li>
    	<li>Syafwan = lingkaran, trapesium.</li>
    </ol>
    <h1>kalkulator persegi</h1>
    <li><a href="persegi.php">persegi</a></li>
    <h1>kalkulator segitiga</h1>
    <li><a href="segitiga.php">segitiga</a></li>
</body>
</html>