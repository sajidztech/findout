<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="dashboard.blade.php">
        <i class="fas fa-home"></i>
        <span class="menu-title">Dashboard</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="listings-all.blade.php">
    <i class="fas fa-align-justify"></i>
        <span class="menu-title">listings All</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="listings-pending.blade.php">
    <i class="fas fa-align-justify"></i>
        <span class="menu-title">Pending listings</span>
    </a>
    </li>
    <li class="nav-item nav-category">User Profile</li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#userprofile" aria-expanded="false" aria-controls="userprofile">
        <i class="fas fa-user"></i>
        <span class="menu-title">User</span>
        <i class="fas fa-chevron-right"></i> 
    </a>
    <div class="collapse" id="userprofile">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="edit-profile-admin.blade.php">Edit Profile</a></li>
        <li class="nav-item"> <a class="nav-link" href="reset-password.blade.php">Reset Password</a></li>
        </ul>
    </div>
    </li>
</ul>
</nav>