<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Web Test</title>

	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	<div id="container">
			
		<div id="header">
			<h1>Pertemuan I -- Sistem Pakar</h1>
			<ul id="navmenu">
				<a href="index.php">home</a>
				<a href="?module=galeri#pos">Galeri</a>
				<a href="?module=jadwal#pos">Jadwal Kuliah</a>
			</ul>
		</div>
		
		<div id="page">
			<?php  if(isset($_GET['module']))
				include "konten/$_GET[module].php";
			else
				include "konten/home.php";?>
		</div>

		<div id="clear"></div>

		<div id="footer">
			<b><p>Ari Sutarman &copy; 2020</p></b>
		</div>
	</div>
</body>
</html>