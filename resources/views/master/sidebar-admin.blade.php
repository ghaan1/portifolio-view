<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('img/admin/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ set_active('dashboardAdmin') }}">
            <a class="nav-link"href="{{ route('dashboardAdmin') }}"   >
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ set_active('user') }}">
            <a class="nav-link" href="{{ route('user') }}">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item {{ set_active('tableUser') }}">
            <a class="nav-link" href="{{ route('tableUser') }}">
              <i class="material-icons">content_paste</i>
              <p>Tabel User</p>
            </a>
          </li>
          <li class="nav-item {{ set_active('tableGambar') }}">
            <a class="nav-link" href="{{ route('tableGambar') }}">
              <i class="material-icons">content_paste</i>
              <p>Tabel Gambar</p>
            </a>
          </li>
          <li class="nav-item {{ set_active('tableFeedback') }}">
            <a class="nav-link" href="{{ route('tableFeedback') }}">
              <i class="material-icons">content_paste</i>
              <p>Tabel Feedback</p>
            </a>
          </li>
        </ul>
      </div>
    </div>