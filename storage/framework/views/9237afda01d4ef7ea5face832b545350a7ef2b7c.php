<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hostel Management System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDown"
            aria-expanded="true" aria-controls="taTpDropDown">
            <i class="fas fa-user-alt"></i>
            <span>User Management</span>
        </a>
        <div id="taTpDropDown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Management:</h6>
                <a class="collapse-item" href="<?php echo e(route('users.index')); ?>">List</a>
                <a class="collapse-item" href="<?php echo e(route('users.create')); ?>">Add New</a>
                <a class="collapse-item" href="<?php echo e(route('users.import')); ?>">Import Data</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php endif; ?>
    

    <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Admin Section
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Warden</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Role & Permissions</h6>
                    <a class="collapse-item" href="<?php echo e(route('roles.index')); ?>">Roles</a>
                    <a class="collapse-item" href="<?php echo e(route('permissions.index')); ?>">Permissions</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php endif; ?>

    

     <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
     <!-- Heading -->
     <div class="sidebar-heading">
         Hostel Section
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDown2"
             aria-expanded="true" aria-controls="taTpDropDown2">
             <i class="fas fa-fw fa-university"></i>
             <span>Hostels</span>
         </a>
         <div id="taTpDropDown2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Hostel, Rooms & Beds</h6>
                 <a class="collapse-item" href="<?php echo e(route('home')); ?>">Hostels</a>
                 <a class="collapse-item" href="<?php echo e(route('home')); ?>">Rooms</a>
                 <a class="collapse-item" href="<?php echo e(route('home')); ?>">Beds</a>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">
 <?php endif; ?>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul><?php /**PATH C:\xampp\htdocs\hms\hostel-management-system\resources\views/common/sidebar.blade.php ENDPATH**/ ?>