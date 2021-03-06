<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Appointments
    </div>

    <li class="nav-item {{ request()->routeIs('admin.appointments.pending') ? 'active' : '' }}">
        <a class=" nav-link" href="{{ route('admin.appointments.pending') }}">
            <i class="fas fa-spinner"></i>
            <span>Pending Appointments</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.appointments.approved') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.appointments.approved') }}">
            <i class="fas fa-fw fa-calendar-check"></i>
            <span>Approved Appointments</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.appointments.completed') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.appointments.completed') }}">
            <i class="fas fa-calendar-check"></i>
            <span>Completed Appointments</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.appointments.canceled') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.appointments.canceled') }}">
            <i class="fas fa-fw fa-calendar-times"></i>
            <span>Canceled Appointments</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Doctors
    </div>

    <li class="nav-item {{ request()->routeIs('admin.doctors*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.doctors') }}">
            <i class="fas fa-fw fa-user-md"></i>
            <span>Manage Doctors</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Patients
    </div>

    <li class="nav-item {{ request()->routeIs('admin.patients*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.patients') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manage Patients</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Resources
    </div>

    <li class="nav-item {{ request()->routeIs('admin.specializations*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.specializations.index') }}">
            <i class="fas fa-user-tag"></i>
            <span>Specializations</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item {{ request()->routeIs('admin.queries*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.queries.index') }}">
            <i class="fas fa-question"></i>
            <span>Queries</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
