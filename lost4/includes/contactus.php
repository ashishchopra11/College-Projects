<?php

include 'dbh.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$msg = $_POST['msg'];

$sql = "INSERT INTO contact (name,email,phoneno,msg)
VALUES ('$name','$email','$phno','$msg')";
// $result=mysqli_query($conn,$sql);
// header("Location: ../contact.php");
if ($conn->query($sql) === TRUE) {
    header("Location: ../contact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
