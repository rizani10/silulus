<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-university"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Kelulusan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('home'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('lulus'); ?>">
        <i class="fas fa-user-graduate"></i>
        <span>Kelulusan</span>
      </a>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pengaturan'); ?>">
        <i class="fas fa-cogs"></i>
        <span>Pengaturan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('users'); ?>">
        <i class="fas fa-users-cog"></i>
        <span>Pengaturan User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link pb-0" href="<?= base_url('auth/logout') ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout </span></a>
    </li>

    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->