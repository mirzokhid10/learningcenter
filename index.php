
<?php 
  require "./includes/header.php";
?>

<section>
  <div class="container">
    <div class="col-3 mx-auto">
    <form action="POST" >
      <div class="form-floating my-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Surname</label>
      </div>
      <div class="form-floating my-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Where are you from?</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
    <div>
      <input class="btn btn-primary" type="submit" id="submit" value="Apply">
    </div>
  </form>
    </div>
  </div>
</section>



<?php 
  require "./includes/footer.php";

?>
