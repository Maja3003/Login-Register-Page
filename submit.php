<?php
$conn = mysqli_connect('localhost', 'root', '', 'php3');

$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

if ($password==$confirm){
$query = "INSERT INTO users(Username, Password) VALUES('$username', '$password')";
mysqli_query($conn, $query);

echo "Successfully registered! Please <a href='login.php'>Login</a>";
} 
else {
    echo "Passwords do not match";
}

mysqli_close($conn);
?>
