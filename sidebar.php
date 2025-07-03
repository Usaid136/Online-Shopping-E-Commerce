<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Online Shopping</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - All Products -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="Products.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>All Products</span>
        </a>
    </li>

    <!-- Nav Item - Add Product -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="Add_products.php">
            <i class="fas fa-plus"></i>
            <span>Add Product</span>
        </a>
    </li>
    <!-- Nav Item - Add latest Product -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="latest_products.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Latest Product</span>
        </a>
    </li>
    <!-- Nav Item - Add comming Product -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="comming_products.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Upcomming Product</span>
        </a>
    </li>

    <!-- Nav Item - Orders -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="orders.php">
            <i class="fas fa-shopping-cart"></i>
            <span>New Orders</span>
        </a>
    </li>
    <!-- Nav Item - deliverd -->
    <li class="nav-item">
        <a class="nav-link" href="Shipped_orders.php">
            <i class="fas fa-truck"></i>
            <span>Shipped Orders</span></a>
    </li>
    <!-- Nav Item - Completed orders -->
    <li class="nav-item">
        <a class="nav-link" href="Completed_orders.php">
            <i class="fas fa-check"></i>
            <span>Completed Orders</span></a>
    </li>
    <!-- Nav Item - Log in Customers -->
    <li class="nav-item">
        <a class="nav-link" href="customer_login.php">
            <i class="fas fa-user"></i>
            <span>Customers Login</span></a>
    </li>
    <!-- Nav Item - newsletter -->
    <li class="nav-item">
        <a class="nav-link" href="Newsletter.php">
            <i class="fas fa-envelope"></i>
            <span>Newsletter</span></a>
    </li>
    <!-- Nav Item - contact -->
    <li class="nav-item">
        <a class="nav-link" href="contact_us.php">
            <i class="fas fa-id-card"></i>
            <span>Contact Us</span></a>
    </li>
    <!-- Nav Item - feedback -->
    <li class="nav-item">
        <a class="nav-link" href="feedbacks.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Feedbacks</span></a>
    </li>

    <!-- Nav Item - signout -->
    <li class="nav-item">
        <a class="nav-link" href="logout.php" data-toggle="modal"
        data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "SignOut" below if you want to SignOut.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">SignOut</a>
                    </div>
                </div>
            </div>
        </div>