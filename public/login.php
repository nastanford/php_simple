<?php 
  include_once '../config.php';
  $config = new Config();
  $pagetitle = "Login";
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
      <main class="form-signin">
        <form action="act_login.php" method="post">
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
      </main>
    </div>
  </div>
</div>
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>