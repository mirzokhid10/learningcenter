<?php 
session_start();

if (!isset($_SESSION['username'])) 
{
  header("location:login.php");
} elseif ($_SESSION["usertype"] == "student") {
  header("location:login.php");
} 

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolpro";

$data = mysqli_connect($host, $user, $password, $db);

$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id = '$id'";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $query = "UPDATE user SET username = '$username', email = '$email', 
            phone = '$phone', password = '$password' WHERE id = '$id'";

  $result2 = mysqli_query($data, $query);

  if ($result2) {
    header("Location:view_student.php");
  }
}
// session_start();

// if(!isset($_SESSION['username'])) 
// {
//   header("location:login.php");
// }elseif($_SESSION["usertype"]=="student") {
//   header("location:login.php");
// } 

// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "schoolpro";

// $data = mysqli_connect($host,$user,$password,$db);

// $id=$_GET['student_id'];
// $sql = "SELECT*FROM user WHERE id = '$id'";

// $result = mysqli_query($data,$sql);

// $info = $result ->fetch_assoc();

// if(isset($_POST['update'])) {
//   $username = $_POST['username'];
//   $email = $_POST['email'];
//   $phone = $_POST['phone'];
//   $password = $_POST['password'];
// }

// $query = "UPDATE user SET username = '$username', email = '$email', 
// phone = '$phone', password = '$password' where id = '$id'";

// $result2 = mysqli_query($data, $query);

// if ($result2) {
//   echo "updated successfully";
// }else {
//   echo "failed to update";
// }

?>


<?php 
  require "../includes/header.php";
?>

<section style="height: 100vh;"> 
  <div class="container h-100 w-100">
    <?php require "admin_sidebar.php" ?>
    <div class="content">
    <center class="w-25 mx-auto">
      <h1>Update students </h1>
      <br>
      <div class="">
        <form action="#" method="POST">
          <div class="form-floating my-3">
              <input type="text" name="username" class="form-control" 
              placeholder="Username" value="<?php echo "{$info['username']}"; ?>">
              <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating my-3">
            <input type="email" name="email" class="form-control" 
            placeholder="Email" value="<?php echo "{$info['email']}"; ?>">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating my-3">
            <input type="number" name="phone" class="form-control" 
            placeholder="Phone" value="<?php echo "{$info['phone']}"; ?>">
            <label for="floatingInput">Phone</label>
          </div>
          <div class="form-floating my-3">
            <input type="password" name="password" class="form-control" 
            placeholder="Password" value="<?php echo "{$info['password']}"; ?>">
            <label for="floatingInput">Password</label>
          </div>
          <div>
            <input type="submit" class="btn btn-success my-3" name="update" value="Update" >
          </div>
        </form>
      </div>
    </center>


	</div>

	</div>
</section>

<?php 
  require "../includes/footer.php";
?>