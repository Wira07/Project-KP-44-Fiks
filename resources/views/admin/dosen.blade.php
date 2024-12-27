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
            <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Start Navbar Links-->
                    <h5 class="brand-text text-dark ms-2 align-middle">PENGELOLAAN DATA KERJA PRAKTEK</h5> <!--end::Brand Text-->
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                        <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                        <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
                    </ul> end::Start Navbar Links begin::End Navbar Links -->
                    <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                        <!--begin::User Menu Dropdown-->
                        <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                                <li class="user-header text-bg-primary"> <img src="{{url('img/LOGOFKOM.png')}}" class="rounded-circle shadow" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2023</small>
                                    </p>
                                </li> <!--end::User Image--> <!--begin::Menu Body-->
                                <li class="user-body"> <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                        <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                        <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                    </div> <!--end::Row-->
                                </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                                <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                            </ul>
                        </li> <!--end::User Menu Dropdown-->
                    </ul> <!--end::End Navbar Links-->
                </div> <!--end::Container-->
            </nav> <!--end::Header--> <!--begin::Sidebar-->
            <aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color: rgb(0, 0, 58); color: white;"> <!--begin::Sidebar Brand-->
                <div class="sidebar-brand bg-light"> <!--begin::Brand Link--> <a href="./home.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{url('img/LOGOFKOM.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
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
                    <h1>Data Dosen Pembimbing Lapangan</h1>
                    <p>Data Dosen Pembimbing Lapangan Kerja Praktek</p>
                    <button class="btn btn-primary" type="button">Tambah Dosen</button>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Dosen</th>
                                <th>Kelompok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1234567890</td>
                                <td>Dosen 1</td>
                                <td>1, 2, 3</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1234567890</td>
                                <td>Dosen 1</td>
                                <td>1, 2, 3</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1234567890</td>
                                <td>Dosen 1</td>
                                <td>1, 2, 3</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1234567890</td>
                                <td>Dosen 1</td>
                                <td>1, 2, 3</td>
                                <td>
                                    <button class="btn btn-primary" type="button">Ubah</button>
                                    <button class="btn btn-danger" type="button">Hapus</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1234567890</td>
                                <td>Dosen 1</td>
                                <td>1, 2, 3</td>
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