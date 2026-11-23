<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Muchamad Azka</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('statis.index') }}">PORTOFOLIO SAYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.index') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statis.portofolio') }}">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('statis.contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm p-4 p-md-5">
                    <h1 class="fw-bold text-dark border-bottom border-primary border-3 pb-3 mb-4">Hubungi Saya</h1>
                    <p class="lead mb-4">Silakan hubungi saya melalui salah satu platform di bawah ini:</p>

                    <div class="row g-4">
                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="card bg-light border-0 shadow-sm h-100">
                                <div class="card-body p-4 overflow-hidden">
                                    <h5 class="card-title fw-bold mb-1">Email Kampus</h5>
                                    <a href="mailto:muchamadazkafirdaus@student.telkomuniversity.ac.id" class="text-decoration-none text-muted text-truncate d-block">muchamadazkafirdaus@student.telkomuniversity.ac.id</a>
                                </div>
                            </div>
                        </div>
                        <!-- GitHub -->
                        <div class="col-md-6">
                            <div class="card bg-light border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold mb-1">GitHub</h5>
                                    <a href="http://github.com/azkaf071-stack" target="_blank" class="text-decoration-none text-muted">github.com/azkaf071-stack</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-light pt-5 pb-4 mt-auto">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold text-white mb-3">PORTOFOLIO SAYA</h5>
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
                        <li class="mb-2 text-secondary small">HTML5 & CSS3</li>
                        <li class="mb-2 text-secondary small">Desain UI (Figma)</li>
                        <li class="mb-2 text-secondary small">Bermain Badminton</li>
                        <li class="mb-2 text-secondary small">Bootstrap 5</li>
                    </ul>
                </div>

                <!-- Kolom 4: Informasi & Kontak -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3 text-white">Informasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="mailto:muchamadazkafirdaus@student.telkomuniversity.ac.id" class="text-secondary text-decoration-none small hover-white text-truncate d-inline-block" style="max-width: 100%;">
                                muchamadazkafirdaus@...
                            </a>
                        </li>
                        <li class="mb-2">
                            <span class="text-secondary small">NIM: 108052500136</span>
                        </li>
                        <li class="mb-2">
                            <a href="http://github.com/azkaf071-stack" target="_blank" class="text-secondary text-decoration-none small hover-white">
                                github.com/azkaf071-stack
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
                    <a href="http://github.com/azkaf071-stack" target="_blank" class="text-secondary me-3 text-decoration-none hover-white small">GitHub</a>
                    <a href="mailto:muchamadazkafirdaus@student.telkomuniversity.ac.id" class="text-secondary me-3 text-decoration-none hover-white small">Email</a>
                </div>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
