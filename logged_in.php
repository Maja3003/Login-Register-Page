<?php
$conn = mysqli_connect('localhost', 'root', '', 'php3');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Username='$username'";
$sql2 = "SELECT * FROM users WHERE Password='$password'";

$Gooduser = mysqli_query($conn, $sql);
$Goodpass = mysqli_query($conn, $sql2);

if (mysqli_num_rows($Gooduser) > 0 && mysqli_num_rows($Goodpass) > 0) {
    echo "Successfully logged in";
} else {
    echo "Wrong username or password!";
}

mysqli_close($conn);
?>
