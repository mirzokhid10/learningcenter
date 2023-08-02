<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolpro";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
  die("connection error");
}

if(isset($_POST["apply"])) {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $sql = "INSERT INTO addmission (firstname, lastname, email, phone, message) 
  VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

  $result = mysqli_query($data, $sql);

  if($result) {
    echo "Apply successfully";
  }else {
    echo "Apply failed";
  }
}
?>