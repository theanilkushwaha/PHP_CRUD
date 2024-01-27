<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $fname        = $_POST['First_name'];
   $lname        = $_POST['Last_name'];
   $nationality  = $_POST['Nationality'];
   $email        = $_POST['Email'];
   $dob          = $_POST['Date_of_birth'];

   $sql = "INSERT INTO `empdata`(`id`, `First_name`, `Last_name`, `Nationality`, `Email`,`Date_of_birth`) VALUES (NULL,'$fname','$lname','$nationality','$email','$email')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>task 2</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header">
        <h1> ❄️ DEV COMMUNITY</h1>
    </div>


   <div class="container">
      <div class="text-center mb-4">
         <h1 style="color:black;">CUSTOMER DATA ENTRY FORM</h1>
         
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
               <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="First_name" placeholder="F name" required>
            </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="Last_name" placeholder="L name"required>
          </div>
</div>
          <div class="row mb-3">
          <div class="col">
            <label class="form-label">Nationality:</label>
            <input type="text" class="form-control" name="Nationality" placeholder="Nationality"required>
          </div>
          <div class="col">
            <label class="form-label">email:</label>
            <input type="email" class="form-control" name="Email" placeholder="email"required>
          </div>
        </div>

        <div class="row ">
          <div class="col">
          <label class="form-label">dob:</label>
          <input type="date" class="form-control" name="Date_of_birth" placeholder="dob" style="width:150px;" required>
        </div>
</div>
            <div>
               <button type="submit" class="btn btn-primary" name="submit">ADD TO LIST</button>
               
            </div>
</div>
         </form>
      </div>
   </div>

  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
