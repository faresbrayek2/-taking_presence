<?php
$pdo = new PDO('mysql:host=localhost;dbname=iset', 'root', '');
$a = $_POST['ID'];
$b = $_POST['First_Name'];
$c = $_POST['last_Name'];


$sql = "UPDATE `student` SET `First_Name`='$b',`last_Name`='$c' WHERE `ID`= '$a'";
$req = $pdo->query($sql);

?>
<script langunbr_hb="JavaScript">
	alert("Votre opération à été effectué avec succés");
	window.location.replace("class.php");
</script>
<?php

?>