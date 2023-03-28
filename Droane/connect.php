<?php

$con = mysqli_connect('localhost', 'root', 'root', 'user_details');

if (!$con) {
    die("sorry: " . mysqli_connect_errno());
}
