  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'dashboard' ? '' : 'collapsed' ?>" href="<?= base_url() ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'bus' ? '' : 'collapsed' ?>" href="<?= base_url('bus') ?>">
          <i class="fa-solid fa-bus"></i>
          <span>Bus</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'driver' ? '' : 'collapsed' ?>" data-bs-target="#driver-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user-gear"></i><span>Driver</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="driver-nav" class="nav-content collapse <?= $curr_page == 'driver' ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('driver') ?>">
              <i class="bi bi-circle"></i><span>Tabel Driver</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('driver/pendapatan?bulan=4') ?>">
              <i class="bi bi-circle"></i><span>Pendapatan Driver</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'kondektur' ? '' : 'collapsed' ?>" data-bs-target="#kondektur-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user-tag"></i></i><span>Kondektur</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kondektur-nav" class="nav-content collapse <?= $curr_page == 'kondektur' ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('kondektur') ?>">
              <i class="bi bi-circle"></i><span>Tabel Kondektur</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('kondektur/pendapatan?bulan=4') ?>">
              <i class="bi bi-circle"></i><span>Pendapatan Kondektur</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'trans_upn' ? '' : 'collapsed' ?>" href="<?= base_url('trans_upn') ?>">
          <i class="fa-solid fa-business-time"></i>
          <span>Transaksi Trans UPN</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'contact' ? '' : 'collapsed' ?>" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'register' ? '' : 'collapsed' ?>" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $curr_page == 'login' ? '' : 'collapsed' ?>" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li> -->

    </ul>

  </aside><!-- End Sidebar-->