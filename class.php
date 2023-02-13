 <html>
  <head>
    <title>Student List</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
	<link rel="icon" href="Reseau-ISET.png" type="image/icon type">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Reseau-ISET.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid grey;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: grey;
  color: white;
}
  table{
  margin-left: auto;
  margin-right: auto;
}
</style>
<script>
       document.getElementById("btn_convert").addEventListener("click", function() {
		html2canvas(document.getElementById("html-content-holder"),
			{
				allowTaint: true,
				useCORS: true
			}).then(function (canvas) {
				var anchorTag = document.createElement("a");
				document.body.appendChild(anchorTag);
				document.getElementById("previewImg").appendChild(canvas);
				anchorTag.download = "filename.jpg";
				anchorTag.href = canvas.toDataURL();
				anchorTag.target = '_blank';
				anchorTag.click();
			});
  });

    </script>

  </head>
  <body>
<center><h1>Student List</h1></center>
<a href="ajouter.html"> Add Student</a></br></br>
<table class="table table-striped table-dark" >
<thead>
<tr>
  <th scope="col"><div align="center">id</div></th>
  <th scope="col"><div align="center">FirstName</div></th>
  <th scope="col"><div align="center">LastName</div></th>
  <th scope="col"><div align="center">A</div></th>
  <th scope="col"><div align="center">P</div></th>
  <th scope="col" colspan="2"><div align="center">edit</div></th>
</tr>
</thead>
<?php
include "db.php";
$sql="select * from student";
$req = $pdo->query($sql);    
while($row = $req->fetch()) {    
?>

<tr bordercolor="#000000">
		<td height="42"><div align="center"><?php echo $row['ID']; ?></div></td>
		<td><div align="center"><?php echo $row['First_Name']; ?></div></td>
		<td><div align="center"><?php echo $row['last_Name']; ?></div></td>
		<td><div align="center" class='form-check'><input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'></div></td>
    <td><div align="center" class='form-check'><input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'></div></td>                              
		<td><div align="center"><a href="supprimer.php?var=<?php echo $row['ID']; ?> "> Delete </a><a href="modifier.php?var=<?php echo $row['ID']; ?> "> Edit </a></div></td>
	</tr>
								
<?php } 
          
?>
</table>



</body>
<html lang="en">
