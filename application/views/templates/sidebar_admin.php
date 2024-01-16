<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        <i class="fas fa-fw fa-school"></i> 
        </div>
        <div class="sidebar-brand-text mx-3"> <?= $title; ?> <sup>PPDB</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" >
    <div class="sidebar-heading">Dashboard</div>
    <li class="nav-item ">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-user"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0" >
    <div class="sidebar-heading">Profile</div>
    <li class="nav-item ">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading">PPDB</div>

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('Web/ppdb'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>PPDB</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('Auth/logout');?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"> </button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= base_url('file/'); ?>img/undraw_rocket.svg " alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="<?= base_url(); ?> https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
<!-- End of Sidebar -->