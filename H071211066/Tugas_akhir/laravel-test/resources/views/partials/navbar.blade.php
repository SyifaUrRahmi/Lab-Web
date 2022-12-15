<nav class="navbar navbar-expand-lg bg-info navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                @can('dosen')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dosendaftarkelas') ? 'active' : '' }}" href="/dosendaftarkelas">Daftar Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kelasku') ? 'active' : '' }}" href="/kelasku">Kelasku</a>
                </li>
                @endcan

                @can('mahasiswa')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('mahasiswadaftarkelas') ? 'active' : '' }}" href="/mahasiswadaftarkelas">Daftar Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kelaskumahasiswa') ? 'active' : '' }}" href="/kelaskumahasiswa">Kelasku</a>
                </li>
                @endcan
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    @can('mahasiswa')
                    <a class="nav-link dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="bi bi-person-circle"></i> {{ auth()->user()->username }}
                    </a>
                    @endcan
                    @can('dosen')
                    <a class="nav-link dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="bi bi-person-circle"></i> {{ auth()->user()->username }}
                    </a>
                    @endcan
                    @can('admin')
                    <a class="nav-link dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="bi bi-person-circle"></i> Admin: {{ auth()->user()->username }}
                    </a>
                    @endcan
                    
                    <ul class="dropdown-menu">
                        @can('admin')
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns-gap"></i> Dashboard </a>
                        </li>
                        @endcan
                        @can('dosen')
                        <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> Profile</a>
                        </li>
                        @endcan
                        @can('mahasiswa')
                        <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> Profile</a>
                        </li>
                        @endcan
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item ">
                    <a href="/login" class="nav-link {{ Request::is('dashboard/dosen*') ? 'active' : '' }}"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>