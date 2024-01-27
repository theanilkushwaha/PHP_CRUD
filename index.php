<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">

  <title>task2</title>
</head>

<body>
 
  <div class="header">
        <h1> ❄️ DEV COMMUNITY</h1>
    </div>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
    <h1 style="color:black;">CUSTOMER DATA LIST </h1>
    <table class="table ">
      <thead class="table" style ="background-color:aqua;">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Nationality</th>
          <th scope="col">Email</th>
          <th scope="col">dob</th>
          <th style ="background-color:aqua;" scope="col">operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `empdata`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["First_name"] ?></td>
            <td><?php echo $row["Last_name"] ?></td>
            <td><?php echo $row["Nationality"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Date_of_birth"] ?></td>
           
            <td>

              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i  style ="color:aqua;" class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i style ="color:aqua;" class="fa-solid fa-trash fs-5"></i></a>
            </td>
            
          </tr>
         
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New to list</a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>