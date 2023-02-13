<html>
  <head>
    <title>Edit Student</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
	    <link rel="icon" href="Reseau-ISET.png" type="image/icon type">

  </head>
</br></br>  
<form action="modif.php" method="post">
  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=iset', 'root', '');
  $a = $_GET['var'];
  $sql = "select * from student where id='" . $a . "'";
  $req = $pdo->query($sql);
  while ($row = $req->fetch()) {
  ?>

  <body>
    <div class="text-center">
      <h1>Edit Student</h1>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card col-8">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input
			  name="ID"
              type="number"
              class="form-control"
              placeholder="ID"
			  value="<?php echo $row['ID']; ?>"
            />
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input
			  name="First_Name"
              type="txt"
              class="form-control"
              placeholder="First Name"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">last Name</label>
            <input
			  name="last_Name"
              type="txt"
              class="form-control"
              placeholder="last Name"
            />
          </div>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
				    <?php } ?>

      </div>
    </div>
  </body>
</html>

