<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/home')}}" class="nav-link {{$menu=="Dashboard"?'active':'in-active'}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">FOOD</li>
          <li class="nav-item">
            <a href="{{url('admin/foods')}}" class="nav-link {{$menu=="Foods"?'active':'in-active'}}">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                List Food
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/foods/create')}}" class="nav-link  {{$menu=="Create Food"?'active':'in-active'}}">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Insert New Food
              </p>
            </a>
          </li>
          <li class="nav-header">USERS</li>
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link {{$menu=="Users"?'active':'in-active'}}">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                List User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/users/create')}}" class="nav-link  {{$menu=="Create User"?'active':'in-active'}}">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Insert New User
              </p>
            </a>
          </li>
          <li class="nav-header">ORDERS</li>
          <li class="nav-item">
            <a href="{{url('admin/orders')}}" class="nav-link  {{$menu=="Orders"?'active':'in-active'}}">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                List Order
              </p>
            </a>
          </li>
          <li class="nav-header">CATEGORIES</li>
          <li class="nav-item">
            <a href="{{url('admin/categories')}}" class="nav-link  {{$menu=="Categories"?'active':'in-active'}}">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                List Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/categories/create')}}" class="nav-link  {{$menu=="Create Category"?'active':'in-active'}}">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Insert New Category
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>