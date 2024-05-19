<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-Commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <!-- @if (auth()->check()) -->
              {{auth()->user()->name}}
            <!-- @endif -->
            </a>
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
          
          <li class="nav-item">
            <a href="{{route('adminHome')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Products
                
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="adminoders" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders
                
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{route('allusers')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Users
                
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{route('bulkupload')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bulk Upload
                
              </p>
            </a>
          
          </li>
          
          <li>
          @if(Auth::check())

          <a class="nav-link" href="{{route('logout')}}">
             
&nbsp;
              <i class="fa-solid fa-right-from-bracket"></i>
              &nbsp;&nbsp;&nbsp;
             Logout
             
            </a>
            @endif
          </li>
        </ul>
      
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>