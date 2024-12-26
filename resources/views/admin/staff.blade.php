<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}" crossorigin="anonymous" />
    <script src="{{url('dist/js/adminlte.min.js')}}" crossorigin="anonymous"></script>
</head>

<body>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <!--begin::App Wrapper-->
        <div class="app-wrapper">
            <!--begin::Header-->
            <nav class="app-header navbar navbar-expand bg-body">
                <!--begin::Container-->
                <div class="container-fluid">
                    <h5 class="brand-text text-dark ms-2 align-middle">PENGELOLAAN DATA KERJA PRAKTEK</h5>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown user-menu">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image">
                                <span class="d-none d-md-inline">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <li class="user-header text-bg-primary">
                                    <img src="{{url('img/LOGOFKOM.png')}}" class="rounded-circle shadow" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2023</small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-4 text-center"><a href="#">Followers</a></div>
                                        <div class="col-4 text-center"><a href="#">Sales</a></div>
                                        <div class="col-4 text-center"><a href="#">Friends</a></div>
                                    </div>
                                </li>
                                <li class="user-footer">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end::Header-->

            <!--begin::Sidebar-->
            <aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color: rgb(0, 0, 58); color: white;">
                <div class="sidebar-brand bg-light">
                    <a href="./home.html" class="brand-link">
                        <img src="{{url('img/LOGOFKOM.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <nav class="mt-2">
                        <!--begin::Sidebar Menu-->
                        <ul class="nav sidebar-menu flex-column" role="menu">
                            <li class="nav-item">
                                <a href="{{ route('infokp') }}" class="nav-link">
                                    <i class="nav-icon bi bi-info-circle"></i>
                                    <p>Info KP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">
                                    <i class="nav-icon bi bi-person-lines-fill"></i>
                                    <p>Data Mahasiswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kelompok') }}" class="nav-link">
                                    <i class="nav-icon bi bi-people"></i>
                                    <p>Data Kelompok</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dosen') }}" class="nav-link">
                                    <i class="nav-icon bi bi-person-badge"></i>
                                    <p>Data Dosen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mitra') }}" class="nav-link">
                                    <i class="nav-icon bi bi-book"></i>
                                    <p>Data Mitra</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('staff') }}" class="nav-link">
                                    <i class="nav-icon bi bi-briefcase"></i>
                                    <p>Data Staff</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!--end::Sidebar-->

            <!--begin::App Main-->
            <main class="app-main">
                <div class="container-fluid px-5 py-3">
                    <h1>Data Staff</h1>
                    <p>Data Staff yang terlibat dalam Kerja Praktek</p>
                    <button class="btn btn-primary" type="button">Tambah Staff</button>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Staff</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1234567891</td>
                                <td>Staff 1</td>
                                <td>Staff Keuangan</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1234567891</td>
                                <td>Staff 2</td>
                                <td>Staff Umum</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </main>
            <footer class="app-footer">
                <strong>
                    Copyright &copy; 2024 Kelompok 44 Kerja Praktek Universitas Kuningan.
                </strong>
                All rights reserved.
            </footer>
        </div>
    </body>
</body>

</html>