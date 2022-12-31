@php
    $user = Auth::user();
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Modules
    </div>

    @if ($user->can('role.create') ||
        $user->can('role.view') ||
        $user->can('role.edit') ||
        $user->can('role.delete') ||
        $user->can('user.view') ||
        $user->can('user.create'))
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
                aria-expanded="true" aria-controls="collapseRole">
                <i class="fas fa-fw fa-tasks"></i>
                <span>
                    User & roles
                </span>
            </a>
            <div id="collapseRole"
                class="collapse {{ Route::is('admin.roles.index') || Route::is('admin.roles.create') || Route::is('admin.roles.edit') || Route::is('admin.users.index') || Route::is('admin.users.create') || Route::is('admin.users.edit') ? 'show' : '' }}"
                aria-labelledby="collapseRole" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @if ($user->can('role.view'))
                        <a class="collapse-item {{ Route::is('admin.roles.index') || Route::is('admin.roles.edit') ? 'active' : '' }}"
                            href="{{ route('admin.roles.index') }}">Manage Roles</a>
                    @endif
                    @if ($user->can('role.create'))
                        <a class="collapse-item {{ Route::is('admin.roles.create') ? 'active' : '' }}"
                            href="{{ route('admin.roles.create') }}">New Role</a>
                    @endif

                    @if ($user->can('user.view'))
                        <a class="collapse-item {{ Route::is('admin.users.index') || Route::is('admin.users.edit') ? 'active' : '' }}"
                            href="{{ route('admin.users.index') }}">Manage Users</a>
                    @endif

                    @if ($user->can('user.create'))
                        <a class="collapse-item {{ Route::is('admin.users.create') ? 'active' : '' }}"
                            href="{{ route('admin.users.create') }}">New User</a>
                    @endif
                </div>
            </div>
        </li>
    @endif

    @if ($user->can('category.create') ||
        $user->can('category.view') ||
        $user->can('category.edit') ||
        $user->can('category.delete'))
        <!-- Nav Item - Category -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                aria-expanded="true" aria-controls="collapseCategory">
                <i class="fas fa-fw fa-th"></i>
                <span>Category</span>
            </a>
            <div id="collapseCategory"
                class="collapse {{ Route::is('admin.categories.index') || Route::is('admin.categories.create') || Route::is('admin.categories.edit') ? 'show' : '' }}"
                aria-labelledby="collapseCategory" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @if ($user->can('category.view'))
                        <a class="collapse-item {{ Route::is('admin.categories.index') || Route::is('admin.categories.edit') ? 'active' : '' }}"
                            href="{{ route('admin.categories.index') }}">Manage Categories</a>
                    @endif
                    @if ($user->can('category.create'))
                        <a class="collapse-item {{ Route::is('admin.categories.create') ? 'active' : '' }}"
                            href="{{ route('admin.categories.create') }}">New Category</a>
                    @endif
                </div>
            </div>
        </li>
    @endif

    @if ($user->can('course.create') || $user->can('course.view') || $user->can('course.edit') || $user->can('course.delete'))
        <!-- Nav Item - Page -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourse"
                aria-expanded="true" aria-controls="collapseCourse">
                <i class="fas fa-fw fa-th"></i>
                <span>Course</span>
            </a>
            <div id="collapseCourse"
                class="collapse {{ Route::is('admin.courses.index') || Route::is('admin.courses.create') || Route::is('admin.courses.edit') ? 'show' : '' }}"
                aria-labelledby="collapseCategory" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @if ($user->can('course.view'))
                        <a class="collapse-item {{ Route::is('admin.courses.index') || Route::is('admin.courses.edit') ? 'active' : '' }}"
                            href="{{ route('admin.courses.index') }}">Manage courses</a>
                    @endif
                    @if ($user->can('course.create'))
                        <a class="collapse-item {{ Route::is('admin.courses.create') ? 'active' : '' }}"
                            href="{{ route('admin.courses.create') }}">New course</a>
                    @endif
                </div>
            </div>
        </li>
    @endif

    @if ($user->can('page.create') || $user->can('page.view') || $user->can('page.edit') || $user->can('page.delete'))
        <!-- Nav Item - Page -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                aria-expanded="true" aria-controls="collapsePage">
                <i class="fas fa-fw fa-file"></i>
                <span>Page</span>
            </a>
            <div id="collapsePage"
                class="collapse {{ Route::is('admin.pages.index') || Route::is('admin.pages.create') || Route::is('admin.pages.edit') ? 'show' : '' }}"
                aria-labelledby="collapseCategory" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @if ($user->can('page.view'))
                        <a class="collapse-item {{ Route::is('admin.pages.index') || Route::is('admin.pages.edit') ? 'active' : '' }}"
                            href="{{ route('admin.pages.index') }}">Manage pages</a>
                    @endif
                    @if ($user->can('page.create'))
                        <a class="collapse-item {{ Route::is('admin.pages.create') ? 'active' : '' }}"
                            href="{{ route('admin.pages.create') }}">New Page</a>
                    @endif
                </div>
            </div>
        </li>
    @endif

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
