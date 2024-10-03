
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Generative AI</title>

    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">

    <!-- bootstrap css & js -->
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/navbar.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mobile.css">
    <link rel="stylesheet" href="./css/utilities.css">
</head>

<body>
    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.html"><img src="./assets/syn-logo-ori.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <h5 class="nav-link"><b>Workshop Artificial Intelligent</b> : Generative AI untuk Pemula</h5>
                    <div class="vr"></div>
                    <form method="POST" action="{{ route('event.register') }}">
                        @csrf
                        <button type="submit" class="btn btn-utama">Daftar Sekarang</button>
                      </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->


    <!-- detail -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="./assets/p1.png" alt="" width="100%" class="rounded mb-5">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Detail Workshop</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-2">
                    <div class="card fixed-side d-none d-lg-block">
                        <div class="sidebar">
                            <div class="card-body">
                                <a class="sidebar-menu active" href="#detail-kelas">Detail</a>
                                <a class="sidebar-menu" href="#biaya">Biaya</a>
                                <a class="sidebar-menu" href="#jadwal">Jadwal</a>
                                <a class="sidebar-menu" href="#lokasi">Lokasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card-body">
                        <div id="detail-kelas">
                            <div class="row">
                                <h6>WORKSHOP</h6>
                                <div class="col-lg-10">
                                    <h1 class="card-title">Artificial Intelligent : Generative AI untuk Pemula</h1>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p><b>Pernah penasaran gimana caranya bikin gambar atau tulisan sendiri pakai AI?</b>
                                    <br><br> Workshop
                                    Generative AI untuk Pemula dengan Microsoft Azure akan menjawab semua pertanyaanmu!

                                    Belajar dari dasar, tanpa perlu jadi ahli coding. <br> Workshop ini cocok banget
                                    buat
                                    kamu yang baru mulai tertarik dengan AI atau ingin meningkatkan skill di bidang ini.
                            </div>
                        </div>
                    </div>
                    <div id="biaya">
                        <div class="row">
                            <h6>Biaya</h6>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Biaya Early</h6>
                                        <h4 class="card-title">IDR 2.000 <sup>.000</sup></h4>
                                        <mark>Sampai 20 Oktober 2024</mark>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Biaya Normal</h6>
                                        <h4 class="card-title">IDR 2.500 <sup>.000</sup> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="jadwal">
                        <div class="row">
                            <h6>Jadwal</h6>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Jadwal Workshop</h6>
                                        <h4 class="card-title">16 & 17 November 2024</h4>
                                        <p class="card-text">Hari Sabtu & Minggu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Pukul</h6>
                                        <h4 class="card-title">Pukul 09:00 - 16:00 WIB</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="lokasi">
                        <div class="row mt-4">
                            <h6>Lokasi</h6>

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="card-title">Meeting Room Hotel Amaris Palembang</h4>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="https://maps.app.goo.gl/S2tTp4k7Sc91jHSV8" target="_blank"
                                                    class="btn btn-utama">Cek Lokasi</a>
                                            </div>
                                        </div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.484837872456!2d104.73359847507606!3d-2.9628856970132804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75ce91a71d6f%3A0xb9cbe6ae724bbe56!2sAmaris%20Hotel%20Palembang!5e0!3m2!1sid!2sid!4v1727849361568!5m2!1sid!2sid"
                                            width="100%" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                            class="mt-3"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- detail -->


    <!-- cta -->
    <section id="cta" class="bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Ayo Daftar Sekarang dan <br> Jadilah Talent Siap Digital!</h1>

                    <!-- Menggunakan metode GET -->
                    <a href="{{ route('event.register.post') }}" class="btn btn-utama m-auto w-80 mt-3 mb-3">Daftar</a>

                    <!-- Link WhatsApp tetap menggunakan <a> -->
                    <a class="mt-3 mb-5 hub" href="https://wa.me/6289633798626">Ada Pertanyaan? Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- cta -->


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="./assets/syn-logo-ori.png" alt="">
                    <p class="sub">Belajar Skill Digital Bersertifikat</p>
                    <a href="https://wa.me/6289633798626" target="_blank"><i class="fa-brands fa-square-whatsapp"></i>
                        (62) 896
                        3379
                        8626</a>
                    <a href="#" target="_blank"><i class="fa-solid fa-envelope"></i> cs@sydemy.com</a>
                    <a href="https://maps.app.goo.gl/p5BFi3kNApcwSbJc9" target="_blank"><i
                            class="fa-solid fa-location-dot"></i>
                        Komplek Rajawali Village, Jl. Rajawali No.1228, 9 Ilir, Ilir Timur II, Kota Palembang, Sumatera
                        Selatan
                        30114</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var sidebarMenuLinks = document.querySelectorAll('.sidebar-menu');

            sidebarMenuLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    // Menghapus class 'active' dari semua tautan sidebar
                    sidebarMenuLinks.forEach(function (link) {
                        link.classList.remove('active');
                    });
                    // Menambah class 'active' pada tautan yang diklik
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>
