<aside class="main-sidebar sidebar-light elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">235 PBKK(B)</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/img/sponge.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ session('user_name','Athaya Rohadatul') }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open"
           class = "nav-item has-treeview {{ request()->is('pertemuan1/*') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('pertemuan1/*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tugas kedua
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                   <li class="nav-item">
                       <a href="{{ url('/crud-role')}}"
                           class="nav-link ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Users</p>
                       </a>
                   </li>
               </ul>
            <ul class="nav nav-treeview">
                   <li class="nav-item">
                       <a href="{{ url('/guest')}}"
                           class="nav-link ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Guest</p>
                       </a>
                   </li>
               </ul>
               <ul class="nav nav-treeview">
                   <li class="nav-item">
                       <a href="{{ url('/booking')}}"
                           class="nav-link ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Booking</p>
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