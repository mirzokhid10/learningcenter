<?php 
error_reporting(0);
session_start();

if(!isset($_SESSION['username'])) 
{
  header("location:login.php");
}elseif($_SESSION["usertype"]=="student") {
  header("location:login.php");
} 

$host="localhost";
$user = "root";
$password = "";
$db = "schoolpro";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM user WHERE usertype = 'student'";

$result = mysqli_query($data,$sql);

?>


<?php 
  require "../includes/header.php";
?>

<section style="height: 100vh;"> 
  <div class="container h-100 w-100">
    <?php require "./admin_sidebar.php" ?>
    <div class="content">
    <center>
		<h1>Student Data</h1>
    <?php if ($_SESSION['message']) {
      echo $_SESSION['message'];
    } 
    unset($_SESSION['message']);
    ?>
    <br>
    <br>
    <table class="border border-1">
      <tr  class="border border-1">
        <th  class="border border-1 border-dark p-3">Username</th>
        <th  class="border border-1 border-dark p-3">Email</th>
        <th  class="border border-1 border-dark p-3">Phone</th>
        <th  class="border border-1 border-dark p-3">Password</th>
        <th  class="border border-1 border-dark p-3">Delete</th>
        <th  class="border border-1 border-dark p-3">Update</th>
      </tr>
      <?php while ($info = $result ->fetch_assoc()) {?>
        <tr>
          <td class="border border-1 border-dark p-3"><?php echo "{$info['username']}" ?></td>
          <td class="border border-1 border-dark p-3"><?php echo "{$info['email']}" ?></td>
          <td class="border border-1 border-dark p-3"><?php echo "{$info['phone']}" ?></td>
          <td class="border border-1 border-dark p-3"><?php echo "{$info['password']}" ?></td>
          <td class="border border-1 border-dark p-3">
            <?php echo "<a class='btn btn-danger' href='delete.php?student_id={$info['id']}'>Delete</a>" ?>
          </td>
          <td class="border border-1 border-dark p-3">
            <?php echo "<a class='btn btn-primary' 
            href='update_student.php?student_id={$info['id']}'>Update</a>" ?>
          </td>
        </tr>
      <?php }?>
    </table>
    </center>
	</div>

	</div>
</section>

<?php 
  require "../includes/footer.php";
?>