<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #00222F;">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ auth()->user()->getFullname() }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="color: #E5E7E4;">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                @if(auth()->user()->role == 'Manager')
                <li class="nav-item has-treeview" >
                    <a href="{{ route('home') }}" class="nav-link" style="background-color:white; color: #00222F !important;">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('vendors.index') }}" class="nav-link {{ activeSegment('vendors') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Vendors</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products') }}">
                        <i class="nav-icon fas fa-percent"></i>
                        <p>Discounts</p>
                    </a>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders') }}">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>Sales Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('purchases.index') }}" class="nav-link {{ activeSegment('purchases') }}">
                                <i class="fas fa-cart-arrow-down nav-icon"></i>
                                <p>Purchase Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('commissions.index') }}" class="nav-link {{ activeSegment('commissions') }}">
                                <i class="fas fa-percent nav-icon"></i>
                                <p>Commissions</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('tasks.index') }}" class="nav-link {{ activeSegment('tasks') }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Task List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>

                @else

                <li class="nav-item has-treeview">
                    <a href="{{ route('home') }}" class="nav-link" style="background-color:white; color: #00222F !important;">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Open POS</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('vendors.index') }}" class="nav-link {{ activeSegment('vendors') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Vendors</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products') }}">
                        <i class="nav-icon fas fa-percent"></i>
                        <p>Discounts</p>
                    </a>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders') }}">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>Sales Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('purchases.index') }}" class="nav-link {{ activeSegment('purchases') }}">
                                <i class="fas fa-cart-arrow-down nav-icon"></i>
                                <p>Purchase Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('commissions.index') }}" class="nav-link {{ activeSegment('commissions') }}">
                                <i class="fas fa-percent nav-icon"></i>
                                <p>Commissions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Employees
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{ route('employees.attendance') }}" class="nav-link {{ activeSegment('attendance') }}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('employees.pay-salaries') }}" class="nav-link {{ activeSegment('pay-salaries') }}">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Pay Salary</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{ route('tasks.index') }}" class="nav-link {{ activeSegment('tasks') }}">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Task List</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{ route('employees.activities') }}" class="nav-link {{ activeSegment('activities') }}">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Activities</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('employees.index') }}"
                                class="nav-link {{ activeSegment('employees') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>All Employees</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('agents.index') }}" class="nav-link {{ activeSegment('agents') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Agents</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('categories.index') }}"
                        class="nav-link {{ activeSegment('categories') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('subcategories.index') }}"
                        class="nav-link {{ activeSegment('subcategories') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Sub Category</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings') }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('all-admins.index') }}" class="nav-link {{ activeSegment('all-admins') }}">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>User Roles</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>

                @endif
                
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
