<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Toko Roti</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        padding-top: 56px;
        /* Agar konten tidak tertutup navbar */
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">TokoRoti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}#products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}#about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="container mt-5">
        <div class="row">
            <section id="about" class="container mt-5 fade-in">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/banner1.jpeg') }}" class="img-fluid rounded shadow" alt="About Us">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-3">Tentang Kami</h2>
                        <p>Kami adalah toko terpercaya yang menyediakan berbagai produk berkualitas dengan harga
                            terbaik. Dengan
                            pengalaman bertahun-tahun, kami berkomitmen untuk memberikan pelayanan terbaik kepada
                            pelanggan.</p>
                        <p>Kepuasan pelanggan adalah prioritas kami. Kami selalu menghadirkan inovasi terbaru dan produk
                            berkualitas yang sesuai dengan kebutuhan Anda.</p>
                        <!--<a href="{{ route('about') }}" class="btn btn-primary mt-3">Selengkapnya</a>-->
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; 2025 Toko Roti. Semua Hak Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>