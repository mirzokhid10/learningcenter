<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolpro";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
  die("connection error");
}

if(isset($_POST["apply"])) {
  $data_name = $_POST["firstname"];
  $data_lsname = $_POST["lastname"];
  $data_email = $_POST["email"];
  $data_phone = $_POST["phone"];
  $data_message = $_POST["message"];

  $sql = "insert into addmission (firstname, lastname, email, phone, message) 
  values ('$data_name', '$data_lsname', '$data_email', '$data_phone', '$data_message')";

  $result = mysqli_query($data, $sql);

  if($result) {
    $_SESSION["message"] = "Your message has been sent successfully";
    header("Location:index.php");
  }else {
    echo "Apply failed";
  }
}
?>