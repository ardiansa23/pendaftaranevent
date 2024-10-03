<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.1-web/css/all.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto"></div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Login Admin Section -->
    <section id="login" class="d-flex align-items-center" style="min-height: 100vh; padding-top: 10px;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="mb-4">Login Admin</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="{{ asset('assets/img-cta.png') }}" alt="Gambar" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- End Login Admin Section -->

    <!-- Footer -->
    <footer class="mt-5 py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('assets/logo.png') }}" alt="logo" class="mb-3">
                    <p>Belajar Skill Digital Online Bersertifikat</p>
                    <a href="mailto:cs@sydemy.com" target="_blank" class="d-block"><i class="fa-solid fa-envelope"></i> cs@sydemy.com</a>
                    <a href="https://wa.me/6289633798626" target="_blank" class="d-block"><i class="fa-brands fa-square-whatsapp"></i> (62) 896 3379 8626</a>
                    <a href="https://maps.app.goo.gl/p5BFi3kNApcwSbJc9" target="_blank" class="d-block"><i class="fa-solid fa-location-dot"></i> Komplek Rajawali Village...</a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Bantuan</h5>
                    <a href="./aboutPage.html" class="d-block">Tentang Kami</a>
                    <a href="./faqPage.html" class="d-block">FaQ</a>
                    <a href="https://wa.me/6289633798626" target="_blank" class="d-block">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Ikuti Sosial Media Kami</h5>
                    <a href="https://instagram.com/syn_academy" target="_blank" class="d-block"><i class="fa-brands fa-square-instagram"></i> Instagram</a>
                    <!-- Tambahkan link sosial media lain -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</body>

</html>
