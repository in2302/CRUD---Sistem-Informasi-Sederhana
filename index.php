<?php 
	include "include/config.php";

	if($_SESSION['level']=="admin"){
		$query = mysql_query("SELECT nama, last_login FROM administrator WHERE username='$_SESSION[admin]'");
		$admin = mysql_fetch_array($query);
	}else{
		$admin = mysql_fetch_array(mysql_query("SELECT nama FROM t_u WHERE username='$_SESSION[admin]'"));
	}
?>

<!DOCTYPE html>
<head>
	<title>Sistem Informasi Akademik Sekolah</title>
	<link rel="stylesheet" href="css/screen.css" type="text/css"  />
</head>
<body> 
	<div id="page-top-outer">    
		<div id="page-top">

			<div id="logo">
				<a href=""><img src="images/shared/logo.png" width="156" height="40"/></a>
			</div>

		</div>
	</div>

	<div class="nav-outer-repeat"> 

		<div class="nav-outer"> 
			<div class="nav">
			<div class="table">
			<ul class="select"><li><a href="index.php"><b>Home</b></a></li></ul>
			<div class="nav-divider">&nbsp;</div>
			<ul class="select">
			  <li><a href="#"><b>Akademik</b></a>
			<div class="select_sub">
				<ul class="sub">
					 <?php
			 if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
			 ?>     <li><a href="input_nilai2.php">Input Nilai Siswa</a></li>
				 	<?php
					}
					?>
					<li><a href="lihat_nilai2.php">Lihat Nilai Siswa</a></li>
					<li><a href="lihat_siswa2.php">Data Siswa</a></li>
					<li><a href="input_siswa2.php">Tambah Siswa Baru</a></li>
				</ul>
			</div>
			</li>
			</ul>
	        
			<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

	</div>
<div class="clear"></div>
</div>
  <div class="clear"></div>

<div id="content-outer">
<div id="content">	
		<h1 align="center">Selamat Datang</h1>
			<div align="center">
				<h2><a href="#">Di Sistem Informasi Sederhana Akademik Sekolah</a></h2>
				<p><?php echo date("H:m:s, d F Y") ?></p>
				<p>Web ini bertujuan untuk membantu pengelola nilai atau guru untuk memasukan nilai siswanya secara online</p><br />
				<p> <img src="images/logo.png"></p>
			</div>
</div>       
<div id="footer">
	<div id="footer-left">Sistem Informasi Sederhana Sekolah</div>
</div>
</body>
</html>