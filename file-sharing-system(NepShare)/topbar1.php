<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark " style="background-color: #fff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
    <?php endif; ?>
      <li>
        <large><b style="color:black;">NepShare</b></large></a>
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
