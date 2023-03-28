<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome</title>

    <style>
        body{
            background-image: url("bg.webp");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .buttons{
            position: absolute;
            top: 60%;
            left: 37%;
            transform: translate(-50,-50);
        }

        .two{
            margin-left: 10px;
        }

        .head1{
            color: wheat;
            text-shadow: 3px 4px red;
            text-align: left;
            font-family: "Lucida Console", "Courier New", monospace;
            font-style: italic;
            font-size: 70px;
        }
        .head2{
            color: antiquewhite;
            text-align: center;
            font-style: italic;
            font-family: "Lucida Console", "Courier New", monospace;
            margin-top: 200px;
            margin-left: 2=10px;
            text-shadow: 3px 4px red;
        }
    </style>
</head>
<body>
   <div class="container my-5 ">
    <h1 class="head1">Droame.com</h1>
    <h2 class="head2">Add bookings <br/> for drone shots....</h2>
    <div class="buttons">
      <button class="one btn btn-secondary"><a href="user.php" class="text-light">Add Bookings</a></button>
      <button class="two btn btn-dark"><a href="display.php" class="text-light">See All Bookings</a></button>
    </div>
    </div>
</body>
</html>
