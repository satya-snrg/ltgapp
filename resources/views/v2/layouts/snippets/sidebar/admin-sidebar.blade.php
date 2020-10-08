<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fas fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3">God's Magic App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin-home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/messages') }}">
            <i class="fas fa-fw fa-sticky-note"></i>
            <span>Messages</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/letters') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Letter From God</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/msg-users') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Message Subscribers</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/contactformsubmissions') }}">
            <i class="fas fa-fw fa-mail-bulk"></i>
            <span>Contact Form</span></a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
