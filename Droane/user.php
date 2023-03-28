<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $destination = $_POST['destination'];

    $sql = "insert into `details`(name,email,mobile,destination)
             values('$name','$email','$mobile','$destination')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Drone</title>
    <style>
        body{

            background-image: url("bg.webp");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <div class="container my-5">
       <form method="post" >
           <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control"
                    placeholder="Enter your name" name="name">
           </div>

           <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control"
                   placeholder="Enter your email" name="email">
           </div>

           <div class="form-group">
                <label >Mobile Number</label>
                <input type="text" class="form-control"
                   placeholder="Enter your mobile no." name="mobile">
           </div>

           <div class="form-group">
                <label >Destination</label>
                <input type="text" class="form-control"
                   placeholder="Enter your preferred destination" name="destination">
           </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button class="btn btn-info"><a href="home.php" class="text-light">Home</a></button>
            </form>
    </div>
</body>
</html>
