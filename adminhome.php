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
    <header class="pt-3">
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none mt">
          <span class="fs-4">Admin Dashboard</span>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="py-2 text-dark text-decoration-none" href="/logout.php">Logout</a>
        </nav>
      </div>
    </header>
    <aside>
      <ul>
        <li>
          <a href="">Admission</a>
        </li>
        <li>
          <a href="">Add Student</a>
        </li>
        <li>
          <a href="">View Student</a>
        </li>
        <li>
          <a href="">Add Teacher</a>
        </li>
        <li>
          <a href="">View Teacher</a>
        </li>
        <li>
          <a href="">Add Courses</a>
        </li>
        <li>
          <a href="">View Courses</a>
        </li>
      </ul>
    </aside>
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