<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}" crossorigin="anonymous" />
    <script src="{{url('dist/js/adminlte.min.js')}}" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
        <div class="app-wrapper"> <!--begin::Header-->
            <nav class="app-header navbar navbar-expand bg-body">
                <div class="container-fluid">
                    <h5 class="brand-text text-dark ms-2 align-middle">PENGELOLAAN DATA KERJA PRAKTEK</h5>
                    <ul class="navbar-nav ms-auto">
                        <!--begin::User Menu Dropdown-->
                        <li class="nav-item dropdown user-menu">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                @if(Auth::check())
                                <img src="{{ url('img/LOGOFKOM.png') }}" class="user-image rounded-circle shadow" alt="{{ Auth::user()->name }}">
                                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                                @else
                                <img src="{{ url('img/avatar.png') }}" class="user-image rounded-circle shadow" alt="Guest">
                                <span class="d-none d-md-inline">Guest</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <li class="user-header text-bg-primary">
                                    <img src="{{ url('img/LOGOFKOM.png') }}" class="rounded-circle shadow" alt="User Image">
                                    <p>
                                        @if(Auth::check())
                                        {{ Auth::user()->name }} - {{ Auth::user()->role }}
                                        <small>Member since {{ Auth::user()->created_at->format('M Y') }}</small>
                                        @else
                                        Guest
                                        @endif
                                    </p>
                                </li>
                                <li class="user-footer">
                                    @if(Auth::check())
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-default btn-flat float-end">Sign in</a>
                                    @endif
                                </li>
                            </ul>
                        </li>

                        <!--end::User Menu Dropdown-->
                    </ul>
                </div>
            </nav>
            <aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color: rgb(0, 0, 58); color: white;"> <!--begin::Sidebar Brand-->
                <div class="sidebar-brand bg-light"> <!--begin::Brand Link--> <a href="{{ route('home') }}" class="brand-link"> <!--begin::Brand Image--> <img src="{{url('img/LOGOFKOM.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
                <div class="sidebar-wrapper">
                    <nav class="mt-2">
                        <!--begin::Sidebar Menu-->
                        <ul class="nav sidebar-menu flex-column" role="menu">
                            <li class="nav-item">
                                <a href="{{ route('infokp') }}" class="nav-link">
                                    <i class="nav-icon bi bi-info-circle"></i> <!-- Ikon untuk Info KP -->
                                    <p>Info KP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">
                                    <i class="nav-icon bi bi-person-lines-fill"></i> <!-- Ikon untuk Data Mahasiswa -->
                                    <p>Data Mahasiswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kelompok') }}" class="nav-link">
                                    <i class="nav-icon bi bi-people"></i> <!-- Ikon untuk Data Kelompok -->
                                    <p>Data Kelompok</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dosen') }}" class="nav-link">
                                    <i class="nav-icon bi bi-person-badge"></i> <!-- Ikon untuk Data Dosen -->
                                    <p>Data Dosen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mitra') }}" class="nav-link">
                                    <i class="nav-icon bi bi-book"></i> <!-- Ikon untuk Data Mitra -->
                                    <p>Data Mitra</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('staff') }}" class="nav-link">
                                    <i class="nav-icon bi bi-briefcase"></i> <!-- Ikon untuk Data Staff -->
                                    <p>Data Staff</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <i class="nav-icon bi bi-box-arrow-right"></i> <!-- Ikon untuk Logout -->
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> <!--end::Sidebar Wrapper-->
            </aside> <!--end::Sidebar--> <!--begin::App Main-->
            <main class="app-main">
                <div class="container-fluid px-5 py-3">
                    <h1>Data Mahasiswa</h1>
                    <p>Data Mahasiswa yang Mendaftar KP</p>
                    <button class="btn btn-primary" type="button">Tambah Mahasiswa</button>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Kelas</th>
                                <th>Kelompok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>20210810001</td>
                                <td>Mahasiswa 1</td>
                                <td>TINFC-2021-01</td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810002</td>
                                <td>Mahasiswa 2</td>
                                <td>TINFC-2021-01</td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810003</td>
                                <td>Mahasiswa 3</td>
                                <td>TINFC-2021-01</td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810004</td>
                                <td>Mahasiswa 4</td>
                                <td>TINFC-2021-01</td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810005</td>
                                <td>Mahasiswa 5</td>
                                <td>TINFC-2021-01</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                    </ul>
                </div>
            </main>
            <footer class="app-footer"> <!--begin::To the end-->
                <!--begin::Copyright--> <strong>
                    Copyright &copy; 2024&nbsp; Kelompok 44 Kerja Praktek Universitas Kuningan 2024</a>.
                </strong>
                All rights reserved.
                <!--end::Copyright-->
            </footer> <!--end::Footer-->
        </div>
    </body><!--end::Body-->
</body>

</html>