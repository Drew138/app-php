<?php
$con = mysqli_connect('mysql-container', 'root', 'local-password','db');
$txtName = $_POST['txtName'];
$sql = "INSERT INTO `name` (`first_name`) VALUES ('$txtName');";
$rs = mysqli_query($con, $sql);

echo "name written correctly to db"
?>
