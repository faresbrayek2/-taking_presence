<?php
$pdo = new PDO('mysql:host=localhost;dbname=iset', 'root', '');
$b = $_POST['First_Name'];
$c = $_POST['last_Name'];
$sql="INSERT INTO `student` (`First_Name`, `last_Name`) VALUES ('$b','$c')";
$req = $pdo->query($sql);
?>
			<script langunbr_hb="JavaScript">
			alert("Votre opération à été effectué avec succés");
			window.location.replace("class.php");
			</script>
			<?php

?>
                            
