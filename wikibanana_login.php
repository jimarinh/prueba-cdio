<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Ejemplo WikiBanana</title>
<link rel="stylesheet" type="text/css" href="wikibanana.css">

<body>

<div class="header">
	<h1>WikiBanana</h1>
</div>

<?php 
	$validuser = false;
	
	if (isset($_POST["username"])) {
		$username = $_POST["username"];
		if ($username == "jimarinh") {		
			$name = "Jorge Iván";
			$progress = 70;
			$validuser = true;
		}
		if ($username == "carlitos") {
			$name = "Carlos Andrés";
			$progress = 20;
			$validuser = true;
		}
		if ($validuser) {
			$_SESSION["username"] = $username;
			$_SESSION["name"] = $name;
			$_SESSION["progress"] = $progress;
		} else {
			echo "<p>Usuario inválido</p><p><a href=\"wikibanana_index.html\">Regresar</a></p>";
			exit();
		}
	}
	if (isset($_SESSION["username"])) {
		$username = $_SESSION["username"];
		$name = $_SESSION["name"];
		$progress = $_SESSION["progress"];
	} 
	
	if (!isset($_POST["username"]) && !isset($_SESSION["username"])) {
		echo "<p>No tienes permiso para acceder</p><p><a href=\"wikibanana_index.html\">Regresar</a></p>";
		exit();	
	}
?>

<div class="progress">
	<img src="wikibanana_user.png" width="20">
	<?php echo $name; ?>
	<progress id="userprogress" value="<?php echo $progress; ?>" max="100"> <?php echo $progress; ?>% </progress> <?php echo $progress; ?>%
</div>

<div>
	<div class="gallery">
	  <a target="_blank" href="wikibanana_topic1.png">
		<img src="wikibanana_topic1.png" width="100">
	  </a>
	  <div class="desc">Conceptos básicos de Sembrado</div>
	</div>
	
	<div class="gallery">
	  <a target="_blank" href="wikibanana_topic2.png">
		<img src="wikibanana_topic2.png" width="100" >
	  </a>
	  <div class="desc">Mantenimiento del Cultivo</div>
	</div>
	
	<div class="gallery">
	  <a target="_blank" href="wikibanana_topic3.png">
		<img src="wikibanana_topic3.png" width="100">
	  </a>
	  <div class="desc">Plagas y Enfermedades</div>
	</div>
	
	<div class="gallery">
	  <a target="_blank" href="wikibanana_topic4.png">
		<img src="wikibanana_topic4.png" width="100">
	  </a>
	  <div class="desc">Cosecha</div>
	</div>
</div>

<div class="clearfix"></div>

<div class="footer">
By Trabuko Electronics
</div>

</body>
</html>