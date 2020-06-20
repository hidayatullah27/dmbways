<!DOCTYPE html>
<html>
<head>
	<title>HDT GAME CENTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "koneksi.php";
?>
	<!-- bagian header template -->
	<header>
		<h1 class="judul">HDT GAME CENTER</h1>
		<p class="deskripsi">Tugas DumbWays... Website Penjualan Game</p>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="#">Add Stock</a>
		
				</li>
				<li>
					<a href="#">Add Genre</a>
				</li>
				<li>
					<a href="#">Add Game</a>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<img alt="Gambar Pokemon" src="Pokemon.jpg" height="500" width="400" />
				<h4>Pokemon</h4>
				<p>$59.99</p>
				<p>stock : 10</p>
			</div>
			<div class="widget">
				<img alt="Gambar naruto" src="naruto.jpg" height="500" width="400" />
				<h4>Naruto</h4>
				<p>$ <a target="_blank" href="https://56.99">56.99</a>.</p>
				<p>stock : 9</p>
			</div>
			<div class="widget">
				<img alt="Gambar doraemon" src="doraemon.jpg" height="500" width="400" />
				<h4>doraemon</h4>
				<p>$ <a target="_blank" href="https://56.99">56.99</a>.</p>
				<p>stock : 9</p>
			</div>

		</aside>	
 	
</body>
</html>