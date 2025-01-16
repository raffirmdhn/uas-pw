<?php include_once '../helper.php' ?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- nav-item -->
          <li class="nav-item">
          <a href="daftar-transaksi.php" class="nav-link <?= isActivePage('daftar-transaksi.php') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Daftar Transaksi
            </p>
          </a>
        </li>
        <!-- /.nav-item -->
         
        <!-- nav-item -->
        <li class="nav-item">
          <a href="daftar-mekanik.php" class="nav-link <?= isActivePage('daftar-mekanik.php') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-car-side"></i>
            <p>
              Daftar Mekanik
            </p>
          </a>
        </li>
        <!-- /.nav-item -->

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>