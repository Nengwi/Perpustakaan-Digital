  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
          <span class="brand-text font-weight-light"><b>PERPUSTAKAAN DIGITAL</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>


                  <li class="nav-item {{ Request::is('admin/master') ? 'menu open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/master*') ? 'block' : 'none' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
              Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/master/anggota" class="nav-link {{ Request::is('admin/master/anggota') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penerbit</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jenis</p>
                </a>
              </li>
            </ul>
          </li>

                  <li class="nav-item">
                      <a href="/admin/user" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              User
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
