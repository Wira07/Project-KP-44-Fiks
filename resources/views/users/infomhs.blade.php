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

    <body class="layout-fixed sidebar-expand-lg"> <!--begin::App Wrapper-->
        <div class="app-wrapper"> <!--begin::Header-->
            <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Start Navbar Links-->
                    <h5 class="brand-text text-dark ms-2 align-middle">KERJA PRAKTEK FAKULTAS ILMU KOMPUTER</h5> <!--end::Brand Text-->
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
                    <nav class="mt-2">
                        <!--begin::Sidebar Menu-->
                        <ul class="nav sidebar-menu flex-column" role="menu">
                            <li class="nav-item">
                                <a href="{{ route('infokpusers') }}" class="nav-link">
                                    <i class="nav-icon bi bi-info-circle"></i> <!-- Ikon untuk Informasi KP -->
                                    <p>Informasi KP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('infomhs') }}" class="nav-link">
                                    <i class="nav-icon bi bi-person-lines-fill"></i> <!-- Ikon untuk Info Mahasiswa -->
                                    <p>Info Mahasiswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('infokelompok') }}" class="nav-link">
                                    <i class="nav-icon bi bi-people"></i> <!-- Ikon untuk Info Kelompok -->
                                    <p>Info Kelompok</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('suratmitra') }}" class="nav-link">
                                    <i class="nav-icon bi bi-envelope"></i> <!-- Ikon untuk Surat ke Mitra -->
                                    <p>Surat ke Mitra</p>
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
                    <h1>Informasi Mahasiswa</h1>
                    <form class="row g-3 p-5">
                        <div class="row mb-3">
                            <label for="emailform" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="emailform" placeholder="email@uniku.ac.id" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom01" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10"><input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan NIM anda" disabled></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom02" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10"><input type="text" class="form-control" id="validationCustom02" placeholder="Masukkan Nama anda" required></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustomUsername" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10"><select class="form-select" aria-label="Default select example" disabled>
                                    <option selected>--Pilih--</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom03" class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-sm-10"><select class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih--</option>
                                    <option value="1">Teknik Informatika - S1</option>
                                    <option value="2">Sistem Informasi - S1</option>
                                    <option value="3">Desain Komunikasi Visual - S1</option>
                                    <option value="4">Manajemen Informatika - D3</option>
                                    <option value="5">Teknik Sipil - S1</option>
                                </select></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom04" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10"><input type="text" class="form-control" id="validationCustom04" placeholder="Masukkan tahun angkatan" required></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom05" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10"><select class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih--</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="5">06</option>
                                </select></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom05" class="col-sm-2 col-form-label">Keikutsertaan MBKM</label>
                            <div class="col-sm-10"><select class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih--</option>
                                    <option value="1">Pernah ikut serta</option>
                                    <option value="2">Tidak pernah ikut serta</option>
                                </select></div>
                        </div>
                        <div class="row mb-3">
                            <label for="validationCustom01" class="col-sm-2 col-form-label">Status Validasi</label>
                            <div class="col-sm-10"><input type="text" class="form-control" id="validationCustom01" placeholder="Status Validasi" disabled></div>
                        </div>
                        <hr class="mb-3">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Saya menyatakan telah mengisi data dengan benar
                                </label>
                                <div class="invalid-feedback">
                                    Anda harus menyetujui sebelum mengirim data pendaftaran.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">PERBARUI</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row px-5 py-3">
                        <label for="formFile" class="col-sm-2 col-form-label">Upload Bukti Pembayaran</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="col-3">
                                    <button type="button" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
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