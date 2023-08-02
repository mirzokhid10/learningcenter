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

<section style="height: 100vh;"> 
  <div class="container h-100 w-100">
    <?php require "./admin/admin_sidebar.php" ?>
    <div class="content">
		<h1>Sidebar Accordion</h1>
		<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.
		Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>
		<input type="text" name="">
	</div>

	</div>
</section>

<?php 
  require "./includes/footer.php";
?>