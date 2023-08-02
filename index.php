<?php 


error_reporting(0);
session_start();
session_destroy();

if ($_SESSION["message"]) {
  $message = $_SESSION["message"];

  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>



<?php 
  require "./includes/header.php";
?>
<?php 
  require "./includes/navbar.php";
?>
<section>
  <div class="w-100">
    <div class="col-3 mx-auto">
      <h4>Please fill the form</h4>
      <form  method="POST" action="data_check.php">
        <div class="form-floating my-3">
          <input type="text" name="firstname" class="form-control" placeholder="Firstname">
          <label for="floatingInput">Firstname</label>
        </div>
        <div class="form-floating">
          <input type="text" name="lastname" class="form-control" placeholder="Lastname">
          <label for="floatingInput">Lastname</label>
        </div>
        <div class="form-floating my-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="number" name="phone" class="form-control" placeholder="Phone number">
          <label for="floatingInput">Phone</label>
        </div>
        <div class="form-floating my-3">
          <textarea class="w-100 p-3" name="message" id="" cols="20" rows="5"></textarea>
        </div>
        <div>
          <input class="btn btn-primary" type="submit" name="apply" value="Apply">
        </div>
      </form>
    </div>
  </div>
</section>



<?php 
  require "./includes/footer.php";

?>
