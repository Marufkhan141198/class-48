<?php
include 'config.php'
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Insert Data</a>
        </li>
 
    </div>
  </div>
</nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Roll</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $query = 'SELECT * FROM students';
  $students = mysqli_query($connection, $query);
  $serialNumber = 1;

  while($row= mysqli_fetch_assoc($students)){
    $id = $row ['ID'];
    $name = $row ['Name'];
    $class = $row ['Class'];
    $roll = $row ['Roll'];
    $address = $row ['Address'];

    echo
    '<tr>
      <th scope="row">'.$serialNumber.'</th>
      <td>'.$name.'</td>
      <td>'.$class.'</td>
      <td>'.$roll.'</td>
      <td>'.$address.'</td>
      <td>
      <a href="#" class="btn btn-primary">Edit</a>
      <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>';
    $serialNumber++;
  }
  ?>
    
    
  </tbody>
</table>
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>