<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="home"></span>
                     Dashboard
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-content-center px-3 mt-4 mb-1 text-muted">
            <span>Admins</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/users" class="nav-link {{ Request::is('users*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="users"></span>
                     Users
                </a>
            </li>
            <li class="nav-item">
                <a href="/customers" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="smile"></span>
                     Customers
                </a>
            </li>
            <div class="nav-item">
                <a class="btn btn-toggle align-items-center rounded collapsed {{ Request::is('products*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <span data-feather="box"></span>
                    Products
                </a>
                <div class="nav-item collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled">
                    <li class="nav-item px-4">
                        <a href="/products/categories" class="nav-link {{ Request::is('products/categories*') ? 'active' : '' }}">
                            <span data-feather="codepen"></span>
                            Category
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/products/kinds" class="nav-link {{ Request::is('products/kinds*') ? 'active' : '' }}">
                            <span data-feather="codepen"></span>
                            Product
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/products/brands" class="nav-link {{ Request::is('products/brands*') ? 'active' : '' }}">
                            <span data-feather="codepen"></span>
                            Brands
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/products/types" class="nav-link {{ Request::is('products/types*') ? 'active' : '' }}">
                            <span data-feather="codepen"></span>
                            Product Types
                        </a>
                    </li>
                  </ul>
                </div>
            </div>
            <li class="nav-item">
                <a href="/daily_reports" class="nav-link {{ Request::is('daily_reports*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="briefcase"></span>
                     Daily Reports
                </a>
            </li>

            {{-- <li class="nav-item">
                <a href="/products" class="nav-link {{ Request::is('products*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="box"></span>
                     Products
                </a>
            </li> --}}
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-content-center px-3 mt-4 mb-1 text-muted">
            <span>Engineer</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/reports" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="archive"></span>
                     Reports
                </a>
            </li>
            <li class="nav-item">
                <a href="/schedules" class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}" aria-current="page">
                    <span data-feather="calendar"></span>
                     Schedule
                </a>
            </li>
        </ul>
    </div>
</nav>