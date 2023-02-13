<?php

$pdo = new PDO('mysql:host=localhost;dbname=iset', 'root', ''); 
$a=$_GET['var'];
$sql = "DELETE FROM `student` WHERE `ID` = $a";
$req = $pdo->query($sql);    

?>
		<script langunbr_hb="JavaScript">
			alert("Votre opération à été effectué avec succés");
			window.location.replace("class.php");
			</script>
			<?php


?>