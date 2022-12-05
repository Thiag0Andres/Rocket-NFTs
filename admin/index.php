<?php
include_once('../top.php');
include_once('./header.php');
?>

<div class='container'>
	<?php
	# área de conteúdo
	if (empty($_SERVER["QUERY_STRING"])) {
		$var = "listArtists.php";
		include_once("$var");
	} else {
		$pg = $_GET['pg'];
		include_once("$pg.php");
	}
	?>
</div>