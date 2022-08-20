<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Simple Php </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/customers.php">Customers</a>
        </li>


        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
          <li class="nav-item">
            <a class="nav-link" href="/admin/index.php">Admin</a>
          </li>
        <?php } ?>
      </ul>
      <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
        {
          // echo session email

          echo "<span class='me-2 text-light'>".$_SESSION['email']."</span>";
          echo "<a class='btn btn-outline-success' href='/act_logout.php'>Logout</a>";
        }
        else
        {
          echo "<a class='btn btn-outline-success' href='/login.php'>Login</a>";
        }
      ?>
    </div>
  </div>
</nav>