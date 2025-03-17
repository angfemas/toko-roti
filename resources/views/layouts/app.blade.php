<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Roti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    /* CSS untuk animasi fade-in */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Navbar Toggler Fix */
    .navbar-toggler {
        border: none;
        outline: none;
        background: none;
        box-shadow: none !important;
    }

    /* Hilangkan background bawaan Bootstrap */
    .navbar-toggler-icon {
        background-image: none !important;
        width: 30px;
        height: 3px;
        background-color: black;
        display: block;
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    /* Garis atas dan bawah */
    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
        content: "";
        width: 30px;
        height: 3px;
        background-color: black;
        display: block;
        position: absolute;
        transition: all 0.3s ease-in-out;
    }

    .navbar-toggler-icon::before {
        top: -10px;
    }

    .navbar-toggler-icon::after {
        bottom: -10px;
    }

    /* Efek animasi saat navbar terbuka */
    .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
        background: transparent;
    }

    .navbar-toggler:not(.collapsed) .navbar-toggler-icon::before {
        top: 0;
        transform: rotate(45deg);
    }

    .navbar-toggler:not(.collapsed) .navbar-toggler-icon::after {
        bottom: 0;
        transform: rotate(-45deg);
    }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Roti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#outlet">Outlet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <!-- Smooth Scroll dan Animasi -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Smooth Scrolling
        document.querySelectorAll('.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    let targetId = this.getAttribute('href').substring(1);
                    let targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 60,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // Animasi fade-in saat scroll
        function fadeInOnScroll() {
            let elements = document.querySelectorAll('.fade-in');
            elements.forEach(el => {
                let rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('show');
                }
            });
        }

        window.addEventListener('scroll', fadeInOnScroll);
        fadeInOnScroll(); // Jalankan saat halaman dimuat
    });
    </script>
    <script>
    document.addEventListener("click", function(event) {
        const navbar = document.querySelector(".navbar-collapse");
        const toggleButton = document.querySelector(".navbar-toggler");

        // Cek apakah yang diklik bukan bagian dari navbar atau tombol toggler
        if (!navbar.contains(event.target) && !toggleButton.contains(event.target)) {
            navbar.classList.remove("show"); // Tutup menu
            toggleButton.classList.add("collapsed"); // Reset tombol hamburger
            toggleButton.setAttribute("aria-expanded", "false"); // Perbaiki status toggle
        }
    });
    </script>


</body>

</html>