<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}" crossorigin="anonymous" />
    <script src="{{url('dist/js/adminlte.min.js')}}" crossorigin="anonymous"></script>
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
                        <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="/dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                                <li class="user-header text-bg-primary"> <img src="/dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
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
            <aside class="app-sidebar shadow" style="background-color: rgb(0, 0, 58); color: white;" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
                <div class="sidebar-brand bg-light"> <!--begin::Brand Link--> <a href="./home.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{url('img/LOGOFKOM.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
                <div class="sidebar-wrapper">
                    <nav class="mt-2"> <!--begin::Sidebar Menu-->
                        <ul class="nav sidebar-menu flex-column" role="menu">
                            <li class="nav-item"> <a href="{{ route('infokpsk') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Informasi KP</p>
                                </a> </li>
                            <li class="nav-item"> <a href="{{ route('validasi') }}" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Data Validasi KP</p>
                                </a> </li>
                            <li class="nav-item"> <a href="logout.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Logout</p>
                                </a> </li>
                        </ul>
                    </nav>
                </div> <!--end::Sidebar Wrapper-->
            </aside> <!--end::Sidebar--> <!--begin::App Main-->
            <main class="app-main">
                <div class="container-fluid px-5 py-3">
                    <h1>Data Validasi Keuangan KP</h1>
                    <div class="row d-flex align-items-center mt-5">
                        <div class="col-5 text-end">
                            <p>Cari berdasarkan : </p>
                        </div>
                        <div class="col-7">
                            <div class="input-group mb-3">
                                <div class="col-3 me-2">
                                    <select class="form-select" aria-label="Default">
                                        <option selected>--Pilih--</option>
                                        <option value="1">NIM</option>
                                        <option value="2">Nama</option>
                                        <option value="3">Kelompok</option>
                                        <option value="4">Kelas</option>
                                    </select>
                                </div>
                                <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul> -->
                                <input type="text" class="form-control" placeholder="Cari..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered mt-3">
                        <thead class="text-center">
                            <tr>
                                <th width="15%">NIM</th>
                                <th width="30%">Nama Mahasiswa</th>
                                <th width="15%">Kelas</th>
                                <th width="15%">Link File</th>
                                <th width="10%">Status Validasi</th>
                                <th widtj="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>20210810001</td>
                                <td class="text-start">Mahasiswa 1</td>
                                <td>TINFC-2021-01</td>
                                <td>M</td>
                                <td>Valid</td>
                                <td>
                                    <button class="btn btn-success" type="button">Validasi</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810002</td>
                                <td class="text-start">Mahasiswa 2</td>
                                <td>TINFC-2021-01</td>
                                <td>XL</td>
                                <td>Valid</td>
                                <td>
                                    <button class="btn btn-success" type="button">Validasi</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810003</td>
                                <td class="text-start">Mahasiswa 3</td>
                                <td>TINFC-2021-01</td>
                                <td>M</td>
                                <td>Belum Valid</td>
                                <td>
                                    <button class="btn btn-success" type="button">Validasi</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810004</td>
                                <td class="text-start">Mahasiswa 4</td>
                                <td>TINFC-2021-01</td>
                                <td>L</td>
                                <td>Valid</td>
                                <td>
                                    <button class="btn btn-success" type="button">Validasi</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>20210810005</td>
                                <td class="text-start">Mahasiswa 5</td>
                                <td>TINFC-2021-01</td>
                                <td>S</td>
                                <td>Belum Valid</td>
                                <td>
                                    <button class="btn btn-success" type="button">Validasi</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
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