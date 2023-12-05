<?php
include("config.php");
$update_id = $_GET['sid'];
$select_query = "select * from mca where sid = {$update_id}";
$result = mysqli_query($conn, $select_query);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/add.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Data</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_data.php">Insert Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update_data.php">Update Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="update_data.php">Edit Information </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- update Form -->

<?php
                while($row = mysqli_fetch_assoc($result)){
?>
  <form class="insert row g-3" action="update_data_config.php" method="post" >
  <div class="col-md-6">
    <label for="inputid" class="form-label">Student Id</label>
    <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $row["sid"]?>">
  </div>
 
  <div class="col-6">
    <label for="inputname" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="sname"  name="sname" value="<?php echo $row["sname"];?>">
  </div>
  <div class="col-6">
    <label for="inputcontact" class="form-label">Student Contact</label>
    <input type="text" class="form-control" id="scontact" name="scontact" value="<?php echo $row["scontact"];?>">
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Student Email-ID</label>
    <input type="email" class="form-control" id="semail" name="semail" value="<?php echo $row["semail"];?>">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Data</button>
    <button type="reset" class="btn btn-primary">Clear Data</button>

  </div>
</form>
<?php
                }
?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>