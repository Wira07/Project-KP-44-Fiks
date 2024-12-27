<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}" crossorigin="anonymous" />

</head>

<body class="login-page bg-body-secondary">
    <div class="d-inline-flex justify-content-center mb-3">
        <img src="{{url('img/LOGOFKOM.png')}}" width="30%" alt="Logo FKOM">
    </div>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="{{url('home')}}" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover text-decoration-none">
                    <h1 class="mb-0"> <b>LOGIN</b></h1>
                </a>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form class="mb-3" action="{{ route('home') }}" method="post" onsubmit="encodePassword()">
                    @csrf
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="loginEmail" name="email" type="email" class="form-control" value="" placeholder="">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="loginPassword" name="password" type="password" class="form-control" placeholder="">
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 d-inline-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
                <p class="mb-0"><a href="register.html" class="text-center">Register a new membership</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../../../dist/js/adminlte.js"></script>

    <!-- Base64 Encode Password Script -->
    <script>
        function encodePassword() {
            const passwordInput = document.getElementById('loginPassword');
            if (passwordInput.value) {
                // Encode password to Base64
                passwordInput.value = btoa(passwordInput.value);
            }
        }
    </script>
</body>

</html>
