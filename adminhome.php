<?php 
session_start();

if(!isset($_SESSION['username'])) 
{
  header("location:login.php");
}elseif($_SESSION["usertype"]=="student") {
  header("location:login.php");
} 
?>


<?php 
  require "./includes/header.php";
?>

<section>
  <div class="container">
    <h1>adminhomepage</h1>
    <a href="logout.php">Logout</a>
  </div>
</section>

<?php 
  require "./includes/footer.php";
?>