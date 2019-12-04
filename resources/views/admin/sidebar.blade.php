<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AS Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/profil_yst1.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Yasta Mardika</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview active {{ (request()->is('admin/categories*')) ? 'menu-open' : 'menu-close' }}">
                    <a href="/admin/categories" class="nav-link {{ (request()->is('admin/categories*')) ? 'active bg-primary' : 'bg-danger' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ (request()->is('admin/categories/tambah')) ? 'active' : '' }}">
                            <a href="/admin/categories/tambah" class="nav-link {{ (request()->is('admin/categories/tambah')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/categories/edit" class="nav-link {{ (request()->is('admin/categories/edit')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ (request()->is('admin/articles*')) ? 'menu-open' : 'menu-close' }}">
                    <a href="/admin/articles" class="nav-link {{ (request()->is('admin/articles*')) ? 'active bg-primary' : 'bg-danger' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Articles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ (request()->is('admin/articles/tambah')) ? 'active' : '' }}">
                            <a href="/admin/articles/tambah" class="nav-link {{ (request()->is('admin/articles/tambah')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/articles/edit" class="nav-link {{ (request()->is('admin/articles/edit')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon "></i>
                                <p>Edit</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
