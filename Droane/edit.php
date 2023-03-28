<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `details` where id ='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$destination = $row['destination'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $destination = $_POST['destination'];

    $sql = "update `details` set id= '$id',name='$name',
                email='$email', mobile='$mobile', destination='$destination'
                where id='$id'";
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
            background-color: blanchedalmond;
        }
    </style>
</head>
<body>
    <div class="container my-5">
       <form method="post" >
           <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control"
                   placeholder="Enter your name" name="name"
                   value=<?php echo $name; ?>>
           </div>

           <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control"
                  placeholder="Enter your email" name="email"
                  value=<?php echo $email; ?>>
           </div>

           <div class="form-group">
                <label >Mobile Number</label>
                <input type="text" class="form-control"
                  placeholder="Enter your mobile no." name="mobile"
                  value=<?php echo $mobile; ?>>
           </div>

           <div class="form-group">
                <label >Destination</label>
                <input type="text" class="form-control"
                  placeholder="Enter your preferred destination" name="destination">
           </div>

                <button type="submit" class="btn btn-info" name="submit">Update</button>

        </form>
    </div>
</body>
</html>
