<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mahasiswa*') ? 'active' : ''}}" href="/dashboard/mahasiswa">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/dosen*') ? 'active' : ''}}" href="/dashboard/dosen">
                    <span data-feather="user-plus" class="align-text-bottom"></span>
                    Dosen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/matakuliah*') ? 'active' : ''}}" href="/dashboard/matakuliah">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Matakuliah
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kelas*') ? 'active' : ''}}" href="/dashboard/kelas">
                    <span data-feather="monitor" class="align-text-bottom"></span>
                    Kelas
                </a>
            </li>
        </ul>

    </div>
</nav>