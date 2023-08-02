<?php 
session_start();

if(!isset($_SESSION['username'])) {
  header("location:login.php");
}elseif($_SESSION["usertype"]=="admin") {
  header("location:login.php");
}
?>


<?php 
  require "./includes/header.php";
?>

<section>
  <div class="container">
    <h1>studenthomepage</h1>
    <a href="logout.php">Logout</a>
  </div>
</section>

<?php 
  require "./includes/foooter.php";
?>