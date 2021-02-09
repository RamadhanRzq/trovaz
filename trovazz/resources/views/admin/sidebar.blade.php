<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
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
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Data Destinasi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('destinasi.create')}}" class="nav-link">
                <p>Input Data Destinasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('destinasi.index')}}" class="nav-link">
                <p>Tampilkan Data Destinasi</p>
              </a>
            </li>
            </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Data Event
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route ('event.create')}}" class="nav-link">
                    <p>Input Data Event</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route ('event.index')}}" class="nav-link">
                    <p>Tampilkan Data Event</p>
                  </a>
                </li>
                </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Data Penginapan
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route ('penginapan.create')}}" class="nav-link">
                        <p>Input Data Penginapan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route ('penginapan.index')}}" class="nav-link">
                        <p>Tampilkan Data Penginapan</p>
                      </a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          Data Berita
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{route ('berita.create')}}" class="nav-link">
                            <p>Input Data Berita</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route ('berita.index')}}" class="nav-link">
                            <p>Tampilkan Data Berita</p>
                          </a>
                        </li>
                        </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                              Data User
                              <i class="fas fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route ('user.create')}}" class="nav-link">
                                <p>Input Data User</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route ('user.index')}}" class="nav-link">
                                <p>Tampilkan Data User</p>
                              </a>
                            </li>
                            </ul>
                            </li>
      </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>