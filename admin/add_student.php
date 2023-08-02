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


if (isset($_POST["add_student"])) {
  $username = $_POST["username"];
  $user_email = $_POST["email"];
  $user_phone = $_POST["phone"];
  $user_password = $_POST["password"];
  $usertype = "student";

  $check = "SELECT * from user WHERE username = '$username'";
  $check_user = mysqli_query($data, $check);

  $row_count = mysqli_num_rows($check_user);

  if($row_count==1) {
    echo "<script type='text/javascript'>alert('Username already exist please try another one');</script>";
  }  else {
    $sql = "INSERT INTO user (username, email, phone, usertype, password) 
    VALUES ('$username', '$user_email', '$user_phone', '$usertype', '$user_password')";
  
    $result = mysqli_query($data,$sql);
  
    if ($result) { 
      echo "<script type='text/javascript'>alert('Data upload success');</script>";
    } else { 
      echo 'error'; 
    };
  }
}

?>



<?php 
  require "../includes/header.php";
?>

<section style="height: 100vh;"> 
  <div class="container h-100 w-100">
     <?php  require "./admin_sidebar.php";?>
    <div class="content">
		<center class="w-25 mx-auto">
      <h1 >Add a student</h1>
      <br>
      <form action="#" method="POST">
        <div class="form-floating my-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating my-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating my-3">
          <input type="number" name="phone" class="form-control" placeholder="Phone">
          <label for="floatingInput">Phone</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label for="floatingInput">Password</label>
        </div>
        <div>
          <input type="submit" class="btn btn-primary my-3" name="add_student" value="Add a student" >
        </div>
      </form>
    </center>
	</div>

	</div>
</section>

<?php 
  require "../includes/footer.php";
?>