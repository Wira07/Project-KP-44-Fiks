<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{url('dist/css/style.css')}}" crossorigin="anonymous" />
    <script src="{{url('dist/js/adminlte.min.js')}}" crossorigin="anonymous"></script>
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid register">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 register-left">
                <img src="{{url('img/LOGOFKOM.png')}}" alt="Logo" />
            </div>
            <div class="col-md-9 container-fluid register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading fw-bold">PENDAFTARAN KERJA PRAKTEK</h3>
                        <div class="row register-form">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="emailform" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="emailform" placeholder="email@uniku.ac.id" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="passwordform" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="passwordform" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="validationCustom01" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan NIM anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Masukkan Nama anda" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustomUsername" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--Pilih--</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Program Studi</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--Pilih--</option>
                                        <option value="1">Teknik Informatika - S1</option>
                                        <option value="2">Sistem Informasi - S1</option>
                                        <option value="3">Desain Komunikasi Visual - S1</option>
                                        <option value="4">Manajemen Informatika - D3</option>
                                        <option value="5">Teknik Sipil - S1</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">Angkatan</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Tahun angkatan" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom05" class="form-label">Kelas</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--Pilih--</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <label for="validationCustom05" class="form-label">Keikutsertaan MBKM</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--Pilih--</option>
                                        <option value="1">Pernah ikut serta</option>
                                        <option value="2">Tidak pernah ikut serta</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom05" class="form-label">Ukuran Jaket</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--Pilih--</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Saya setuju dengan syarat dan ketentuan yang berlaku
                                        </label>
                                        <div class="invalid-feedback">
                                            Anda harus menyetujui sebelum mengirim data pendaftaran.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">DAFTAR</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script src="/dist/js/adminlte.js"></script>
                <script src="/dist/js/jquery.js"></script>
</body>

</html>