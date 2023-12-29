<nav class="navbar navbar-expand-lg navbar-dark bg-primary my-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?php if($title == 'Home'){ echo 'active';} ?>">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item <?php if($title == 'View'){ echo 'active';} ?>">
        <a class="nav-link" href="view.php">VIEW</a>
      </li>
      <li class="nav-item <?php if($title == 'Update'){ echo 'active';} ?>">
        <a class="nav-link" href="updatedata.php">UPDATE</a>
      </li>
      <li class="nav-item <?php if($title == 'Delete'){ echo 'active';} ?>">
        <a class="nav-link" href="deletedata.php">DELETE</a>
      </li>
    </ul>
  </div>
</nav>