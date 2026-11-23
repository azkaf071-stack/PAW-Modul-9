<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Muchamad Azka</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('statis.index') }}"><i class=""></i>PORTOFOLIO SAYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('statis.index') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.portofolio') }}">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <img src="{{ Vite::asset('resources/images/profil.jpeg') }}" alt="Foto Profil" class="hero-img">
                        </div>
                        <div class="col-md-8">
                            <h1 class="display-6 fw-bold text-dark mb-2">Muchamad Azka Firdaus Kurniawan</h1>
                            <p class="fs-5 text-muted mb-4"><i class=""></i>NIM: 108052500136</p>
                            <p class="lead">Saya adalah Mahasiswa Semester 3 Program Studi Sistem Informasi di Telkom University Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION ICON -->
        <section id="layanan" class="mt-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Apa yang Bisa Saya Lakukan?</h2>
                <p class="text-muted">Beberapa keahlian, layanan, dan minat yang saya miliki.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Ikon 1: Web Development -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="card-body">
                            <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle mb-3 shadow" style="width: 70px; height: 70px;">
                                <i class="bi bi-code-slash fs-2"></i>
                            </div>
                            <h4 class="fw-bold h5">Web Development</h4>
                            <p class="text-muted small mb-0">Membangun website responsif dari nol menggunakan HTML, CSS, JavaScript, dan framework Bootstrap.</p>
                        </div>
                    </div>
                </div>

                <!-- Ikon 2: UI/UX Design -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="card-body">
                            <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle mb-3 shadow" style="width: 70px; height: 70px;">
                                <i class="bi bi-palette-fill fs-2"></i>
                            </div>
                            <h4 class="fw-bold h5">UI/UX Design</h4>
                            <p class="text-muted small mb-0">Merancang antarmuka pengguna (User Interface) yang modern dan pengalaman pengguna yang ramah menggunakan Figma.</p>
                        </div>
                    </div>
                </div>

                <!-- Ikon 3: Bermain Badminton -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="card-body">
                            <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle mb-3 shadow" style="width: 70px; height: 70px;">
                                <i class="bi bi-trophy-fill fs-2"></i>
                            </div>
                            <h4 class="fw-bold h5">Bermain Badminton</h4>
                            <p class="text-muted small mb-0">Menjaga kebugaran fisik dan melatih sportivitas melalui olahraga badminton di waktu luang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-light pt-5 pb-4 mt-auto">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-code-slash fs-3 text-primary me-2"></i>
                        <h5 class="fw-bold text-white mb-0">PORTOFOLIO SAYA</h5>
                    </div>
                    <p class="text-secondary small pe-lg-4" style="text-align: justify;">
                        Website portofolio sederhana ini dibuat untuk menampilkan profil, keahlian, dan proyek-proyek yang telah saya kerjakan selama menempuh pendidikan di Sistem Informasi Telkom University Surabaya.
                    </p>
                </div>

                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3 text-white">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('statis.index') }}" class="text-secondary text-decoration-none small hover-white">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('statis.about') }}" class="text-secondary text-decoration-none small hover-white">Tentang</a></li>
                        <li class="mb-2"><a href="{{ route('statis.portofolio') }}" class="text-secondary text-decoration-none small hover-white">Portofolio</a></li>
                        <li class="mb-2"><a href="{{ route('statis.contact') }}" class="text-secondary text-decoration-none small hover-white">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Keahlian -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3 text-white">Keahlian</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 text-secondary small"><i class=""></i>HTML5 & CSS3</li>
                        <li class="mb-2 text-secondary small"><i class=""></i>Desain UI (Figma)</li>
                        <li class="mb-2 text-secondary small"><i class=""></i>Bermain Badminton</li>
                        <li class="mb-2 text-secondary small"><i class=""></i>Bootstrap 5</li>
                    </ul>
                </div>

                <!-- Kolom 4: Informasi & Kontak -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3 text-white">Informasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="mailto:muchamadazkafirdaus@student.telkomuniversity.ac.id" class="text-secondary text-decoration-none small hover-white text-truncate d-inline-block" style="max-width: 100%;">
                                <i class=""></i>muchamadazkafirdaus@...
                            </a>
                        </li>
                        <li class="mb-2">
                            <span class="text-secondary small">
                                <i class=""></i>NIM: 108052500136
                            </span>
                        </li>
                        <li class="mb-2">
                            <a href="http://github.com/azkaf071-stack" target="_blank" class="text-secondary text-decoration-none small hover-white">
                                <i class=""></i>github.com/azkaf071-stack
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-secondary mt-4 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small class="text-secondary">&copy; 2026 Muchamad Azka Firdaus Kurniawan. All Rights Reserved.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="http://github.com/azkaf071-stack" target="_blank" class="text-secondary me-3 text-decoration-none hover-white fs-5" title="GitHub"><i class="bi bi-github"></i></a>
                    <a href="mailto:muchamadazkafirdaus@student.telkomuniversity.ac.id" class="text-secondary me-3 text-decoration-none hover-white fs-5" title="Email"><i class="bi bi-envelope-fill"></i></a>
                </div>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
