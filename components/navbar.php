<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#"><?= $config['title'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['page'] == 'home') {echo 'active';} ?>" aria-current="page" href="index.php?page=home"><i class="fa-solid fa-house-chimney"></i> หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['page'] == 'product') {echo 'active';} ?> " href="index.php?page=product"><i class="fa-solid fa-shop"></i> สินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['page'] == 'post') {echo 'active';} ?> " href="index.php?page=post"><i class="fa-solid fa-newspaper"></i> โพสค์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['page'] == 'about') {echo 'active';} ?> " href="index.php?page=about"><i class="fa-solid fa-address-book"></i> ติดต่อเรา</a>
        </li>
        <?php if (isset($_SESSION['role'])) { 
          if ($_SESSION['role'] == 'admin') { ?>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['page'] == 'admin') {echo 'active';} ?> " href="index.php?page=admin">Admin</a>
        </li>
        <?php }} ?>
      </ul>
      <div class="navbar-nav">
        <?php if (isset($_SESSION['username'])) { ?>
        <!-- <a href="#" class="nav-link"> <?php echo $_SESSION['username'] ?></a> -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-circle-user"></i> <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu ">
            <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
        data-bs-target="#Profile"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['role'] ?></button></li>
            <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
        data-bs-target="#ChangePassword">เปลื่ยนรหัสผ่าน</button></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php?page=logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
          </ul>
        </li>
      <?php } else { ?>
        <a href="index.php?page=login" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        <div class="vr"></div>
        <a href="index.php?page=sginup" class="nav-link"><i class="fa-solid fa-user-plus"></i> Sgin Up</a>
      <?php } ?>
      </div>
    </div>
  </div>
</nav>