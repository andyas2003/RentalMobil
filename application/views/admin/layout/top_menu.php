<aside class="main-sidebar sidebar-light-primary elevation-4">
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/admin/dist/img/logo.jpg'); ?>" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block">FLOBAMORA RENT CAR</a>
      </div>
    </div>
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('admin/dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('kategori'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('driver'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Driver
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('pariwisata'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Pariwisata
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('order'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Order
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('admin/logout'); ?>" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>