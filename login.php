<?php require "./includes/header.php" ?>
<?php require "./includes/navbar.php" ?>
<section class="login_form">
  <div>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <h4>
      <?php 
      error_reporting(0);
      session_start();
      session_destroy();
      echo $_SESSION['loginMessage'];
      ?>
    </h4>
  </div>
  <form action="login_check.php" method="POST">
    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInput">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating my-4">
      <input type="password" name="password" class="form-control" id="floatingPassword">
      <label for="floatingPassword">Password</label>
    </div>
    <input class="btn btn-primary w-30 py-2 mx-auto" type="submit" name="submit" value="Click">
  </form>
</section>

<?php require "./includes/footer.php" ?>