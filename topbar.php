<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark " style="background-color: #fff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars" style="color:black;"></i></a>
      </li>
    <?php endif; ?>
      <li>
        <a class="nav-link text-white"  href="./" role="button"> <large><b style="color:black;">NepShare</b></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
