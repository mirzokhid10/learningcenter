<?php 
session_start();

if(!isset($_SESSION['username'])) 
{
  header("location:login.php");
}elseif($_SESSION["usertype"]=="student") {
  header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolpro";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * from addmission";

$result = mysqli_query($data,$sql)

?>



<?php 
  require "../includes/header.php";
?>

<section style="height: 100vh;"> 
  <div class="container h-100 w-100">
     <?php  require "./admin_sidebar.php";?>
    <div class="content">
		<center>
      <h1>Applied for admission</h1>
      <br>
      <table style="border: 1px solid black;">
        <tr style="border: 1px solid black;">
          <th style="padding:20px; font-size:15px; border: 1px solid black;">Firstname</th>
          <th style="padding:20px; font-size:15px; border: 1px solid black;">Lastname</th>
          <th style="padding:20px; font-size:15px; border: 1px solid black;">Email</th>
          <th style="padding:20px; font-size:15px; border: 1px solid black;">Phone</th>
          <th style="padding:20px; font-size:15px; border: 1px solid black;">Message</th>
        </tr>
        <?php while($info = $result->fetch_assoc()) {

        ?>
        <tr>
          <td style="padding:20px; font-size:15px; border: 1px solid black;">
            <?php echo "{$info['firstname']}";?>
          </td>
          <td style="padding:20px; font-size:15px; border: 1px solid black;">
            <?php echo "{$info['lastname']}";?>  
          </td>
          <td style="padding:20px; font-size:15px; border: 1px solid black;">
            <?php echo "{$info['email']}";?>  
          </td>
          <td style="padding:20px; font-size:15px; border: 1px solid black;">
            <?php echo "{$info['phone']}";?>  
          </td>
          <td style="padding:20px; font-size:15px; border: 1px solid black;">
            <?php echo "{$info['message']}";?>  
          </td>
          <?php  } ?>
        </tr>
      </table>
    </center>
	</div>

	</div>
</section>

<?php 
  require "../includes/footer.php";
?>