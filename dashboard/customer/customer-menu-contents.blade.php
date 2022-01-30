<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="dashboard-customer.blade.php">
        <i class="fas fa-home"></i>
        <span class="menu-title">Dashboard</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="listing-rent.blade.php">
        <i class="fas fa-dollar-sign"></i>
        <span class="menu-title">My Rents</span>
    </a>
    </li>
    <li class="nav-item nav-category">Search property</li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#listings" aria-expanded="false" aria-controls="listings">
        <i class="fas fa-align-justify"></i>
        <span class="menu-title">Search property</span>
        <i class="fas fa-chevron-right"></i> 
    </a>
    <div class="collapse" id="listings">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="../../listing-full.blade.php">All property</a></li>
        <li class="nav-item"> <a class="nav-link" href="../../listing-style-1.blade.php">Latest property</a></li>
        <li class="nav-item"> <a class="nav-link" href="../../listing-style-2.blade.php">Previous booked</a></li>
        </ul>
    </div>
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
        <li class="nav-item"> <a class="nav-link" href="edit-profile-customer.blade.php">Edit Profile</a></li>
        <li class="nav-item"> <a class="nav-link" href="reset-password.blade.php">Reset Password</a></li>
        </ul>
    </div>
    </li>
</ul>
</nav>