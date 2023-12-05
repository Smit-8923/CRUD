<?php

    include("config.php");
    $my_query = "select * from mca";
    $result = mysqli_query($conn,$my_query);
    // echo"<pre>";
    // print_r($result);
    // echo"</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_data.php">Insert Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update_data.php">Update Data</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><br>

   

    <?php
        if(mysqli_num_rows($result) > 0){ 
    ?>

    <!-- table Start -->
<table class="table table-dark table-hover">
 
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
            
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                    <td><?php echo $row["sid"]?></td>
                    <td><?php echo $row["sname"]?></td>
                    <td><?php echo $row["semail"]?></td>
                    <td><?php echo $row["scontact"]?></td>
                    <td>
                        <button  type="button" class="btn"><a href="delete_config.php?sid=<?php echo $row['sid'];?>">Delete</a></button>
                        <button  type="button" class="btn"><a href="update_data_inline.php?sid=<?php echo $row['sid'];?>">Edit</a></button>

                      
                    </td>
            </tr>

            <?php
            }?>
        </tbody>

    
    
    <?php
    
        }?>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>