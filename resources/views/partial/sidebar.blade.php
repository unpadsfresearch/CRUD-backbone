<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block">Final Project Review Film</a>
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
            <a href="{{ route('index') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>

          <li class="nav-item">
            <a href="{{ route('cast.index') }}" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
              Cast
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('genre.index') }}" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
              Genres
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('film.index') }}" class="nav-link">
              <i class="nav-icon fas fa-film"></i>
              <p>
              Film
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
</div>