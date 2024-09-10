<div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#productsMenu">
                    <i class="fas fa-box"></i> Products
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="productsMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="{{  route('admin.allProducts') }}">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brands</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#ordersMenu">
                    <i class="fas fa-shopping-cart"></i> Orders
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="ordersMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pending Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Completed Orders</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#customersMenu">
                    <i class="fas fa-users"></i> Customers
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="customersMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Customer Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Customer Reviews</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#reviewsMenu">
                    <i class="fas fa-star"></i> Reviews
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="reviewsMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pending Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Approved Reviews</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#marketingMenu">
                    <i class="fas fa-bullhorn"></i> Marketing
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="marketingMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Coupons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Newsletter</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#customizeMenu">
                    <i class="fas fa-cogs"></i> Customize
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="customizeMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sliders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#settingsMenu">
                    <i class="fas fa-cogs"></i> Settings
                    <i class="fas fa-caret-down ml-auto"></i>
                </a>
                <ul id="settingsMenu" class="collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">General Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Payment Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shipping Settings</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-chart-bar"></i> Reports
                </a>
            </li>
        </ul>
    </div>
<style>
    .sidebar {
        background-color: #2d3238;
        width: 250px;
        height: 100vh;
        padding: 1.5rem;
        color: #fff;
        position: fixed;
        overflow-y: auto; /* Makes the sidebar scrollable */
        overflow-x: hidden; /* Hides horizontal overflow */
    }

    .sidebar-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .sidebar-header h2 {
        font-size: 1.5rem;
        color: #f8f9fa;
        font-weight: bold;
    }

    .sidebar ul {
        list-style-type: none;
        padding-left: 0;
        margin: 0;
    }

    .sidebar .nav-link {
        color: #adb5bd;
        padding: 10px 15px;
        text-decoration: none;
        display: flex;
        align-items: center;
        font-size: 1rem;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
        background-color: #495057;
        color: #fff;
        border-radius: 6px;
    }

    .sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .nav-item {
        margin-bottom: 1rem;
    }

    .collapse {
        display: none;
        padding-left: 1rem;
    }

    .collapse.show {
        display: block;
    }

    .ml-auto {
        margin-left: auto;
    }
</style>


