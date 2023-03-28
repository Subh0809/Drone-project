<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Users</title>
    <style>
        body{
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">
        Add User
        </a>
        </button>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Destination</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
include 'connect.php';
$sql = "select * from `details`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $destination = $row['destination'];
        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $destination . '</td>
                        <td>
                        <button class="btn btn-info"><a href="edit.php?updateid=' . $id . '"
                         class="text-light">Edit</a></button>

                         <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '"
                        class="text-light">Delete</a></button>
                        </td>
                        </tr>';
    }
}
?>
        </tbody>
        </table>
    </div>
</body>
</html>
