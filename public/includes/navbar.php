<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Simple Php </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        echo '<li class="nav-item">';
        echo '<a class="nav-link active" aria-current="page" href="/index.php">Home</a>';
        echo '</li>';
        if(isset($_SESSION['user']) and  count($_SESSION['user']) == 1)
        {
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="/users/index.php">Users</a>';
          echo '</li>';
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="/customers/index.php">Customers</a>';
          echo '</li>';
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/admin/users/index.php">Users</a></li>
            <li><a class="dropdown-item" href="/admin/customers/index.php">Customers</a></li>
            <!-- 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            -->
          </ul>
        </li>
        
        <?php
        }                
        echo '</ul>';


        if(isset($_SESSION['user']) and  count($_SESSION['user']) == 1)
        {
          echo "<span class='me-2 text-light'>".$_SESSION['user'][0]['firstname']." ".$_SESSION['user'][0]['lastname']."</span>";
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