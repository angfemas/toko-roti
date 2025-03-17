@extends('layouts.app')

@section('content')

<!-- Tambahkan CSS Animate -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<div class="container-fluid p-0">

    <!-- Carousel Full Width -->
    <section id="home" data-aos="fade-up" data-aos-once="false">
        <div id="carouselContainer" class="position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/banner1.jpeg') }}" class="d-block w-100 carousel-img"
                            alt="Banner 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/banner2.jpeg') }}" class="d-block w-100 carousel-img"
                            alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/banner3.jpeg') }}" class="d-block w-100 carousel-img"
                            alt="Banner 3">
                    </div>
                </div>
            </div>
            <div class="carousel-text">
                <h2>Selamat Datang di Toko Kami</h2>
                <p>Temukan berbagai produk berkualitas dengan harga terbaik.</p>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="products" class="container bg-light mt-5" data-aos="fade-up" data-aos-once="false">
        <h2 class="text-center mb-4">Daftar Produk</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>

        @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card shadow-sm mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="Produk">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center">Tidak ada produk yang tersedia.</p>
        @endif
    </section>

    <!-- About Us Section -->
    <section id="about" class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-right" data-aos-once="false">
                <img src="{{ asset('storage/banner1.jpeg') }}" class="img-fluid rounded shadow" alt="About Us">
            </div>
            <div class="col-md-6">
                <h2 data-aos="fade-left" data-aos-once="false">Tentang Kami</h2>
                <p data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                    Kami adalah toko terpercaya yang menyediakan berbagai produk berkualitas dengan harga terbaik.
                </p>
                <a href="{{ route('about') }}" class="btn btn-primary mt-3" data-aos="fade-up" data-aos-delay="400"
                    data-aos-once="false">Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Outlet Section -->
    <section id="outlet" class="py-5 bg-light mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" data-aos="fade-up">Lokasi Outlet Kami</h2>
                <p class="text-muted" data-aos="fade-up" data-aos-delay="200">
                    Temukan toko roti kami di berbagai lokasi terbaik untuk menikmati roti segar setiap hari!
                </p>
            </div>

            <div class="row">
                <!-- Outlet 1 -->
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('storage/banner1.jpeg') }}" class="card-img-top" alt="Outlet 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Outlet Pusat</h5>
                            <p class="card-text text-muted">Jl. Sudirman No. 45, Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- Outlet 2 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('storage/banner1.jpeg') }}" class="card-img-top" alt="Outlet 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Outlet Bandung</h5>
                            <p class="card-text text-muted">Jl. Braga No. 23, Bandung</p>
                        </div>
                    </div>
                </div>

                <!-- Outlet 3 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('storage/banner1.jpeg') }}" class="card-img-top" alt="Outlet 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Outlet Surabaya</h5>
                            <p class="card-text text-muted">Jl. Tunjungan No. 56, Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- outlet About Us end-->
    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-ligt">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" data-aos="fade-up">Hubungi Kami</h2>
                <p class="text-muted" data-aos="fade-up" data-aos-delay="200">
                    Jika ada pertanyaan atau ingin bekerja sama, silakan hubungi kami melalui kontak di bawah ini.
                </p>
            </div>

            <div class="row justify-content-center">
                <!-- Alamat -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card bg-light text-dark shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Alamat</h5>
                            <p class="card-text">Jl. Sudirman No. 45, Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card bg-light text-dark shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-phone fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Telepon</h5>
                            <p class="card-text">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card bg-light text-dark shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">support@tokokami.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-light text-center py-4 mb-1">
        <div class="container">
            <p class="mb-2">© 2025 Toko Kami. All Rights Reserved.</p>
            <div>
                <a href="#" class="text-light mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>
    </footer>
    <!-- Footer end-->



</div>

<!-- CSS -->
<style>
.carousel-img {
    height: 50vh;
    object-fit: cover;
}

.carousel-text {
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 20px;
    text-align: center;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}

.card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border-radius: 15px;
}

.card:hover {
    transform: translateY(-15px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

/* Animasi Fade Out Saat Scroll */
[data-aos][data-aos][data-aos][data-aos] {
    transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

[data-aos]:not(.aos-animate) {
    opacity: 0;
    transform: translateY(40px);
}

/* Footer Styling */
footer {
    background: linear-gradient(to right, rgb(83, 93, 102), rgb(37, 65, 94));
    transition: all 0.3s ease-in-out;
}

footer a:hover {
    color: #17a2b8 !important;
    transition: color 0.3s ease-in-out;
}
</style>

<!-- Script Animasi -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
AOS.init({
    duration: 850,
    easing: "ease-in-out",
    once: false, // Animasi akan diputar ulang saat elemen muncul lagi
    mirror: true,
});
</script>

// Animasi Fade-in untuk elemen yang memiliki kelas 'fade-in'
<script>
function revealOnScroll() {
    var elements = document.querySelectorAll(".fade-in");
    var windowHeight = window.innerHeight;

    elements.forEach(function(element) {
        var position = element.getBoundingClientRect().top;
        if (position < windowHeight - 50) {
            element.classList.add("show");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);
revealOnScroll();
</script>
@endsection