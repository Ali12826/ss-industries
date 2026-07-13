<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Industries - @yield('title', 'Pharmaceutical Excellence')</title>

    <link rel="icon" href="{{ asset('images/favicon.png') }}?v=2" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- Color Variables --- */
        :root {
            --ss-dark: #003366;   /* Deep Navy */
            --ss-brand: #0056b3;  /* Logo Blue */
            --ss-accent: #00a8e8; /* Bright Blue */
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333;
        }

        /* Top Bar Styling */
        .top-bar {
            background-color: var(--ss-dark);
            color: white;
            font-size: 0.9rem;
            padding: 10px 0;
        }
        .top-bar a { color: white; text-decoration: none; transition: 0.3s; }
        .top-bar a:hover { color: var(--ss-accent); }

        /* Navbar Styling */
        .navbar {
            background-color: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 15px 0;
        }

        /* --- LOGO UPDATES --- */
        .navbar-brand img {
            height: 85px;
            margin-right: 15px;
            filter: drop-shadow(0px 4px 4px rgba(0,0,0,0.1));
        }

        .navbar-brand span {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--ss-dark);
            letter-spacing: 1px;
            line-height: 1.2;
        }

        /* Menu Links */
        .nav-link {
            color: var(--ss-dark) !important;
            font-weight: 600;
            font-size: 1.05rem;
            margin: 0 12px;
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--ss-brand) !important;
        }
        /* Sliding Blue Line */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -5px;
            left: 0;
            background-color: var(--ss-brand);
            transition: width 0.3s;
        }
        .nav-link:hover::after { width: 100%; }

        /* Contact Button */
        .btn-contact {
            background-color: var(--ss-brand);
            color: white !important;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
            border: 2px solid var(--ss-brand);
            transition: all 0.3s ease;
        }
        .btn-contact:hover {
            background-color: white;
            color: var(--ss-brand) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 86, 179, 0.3);
        }
        .btn-contact::after { display: none; }

        /* Footer */
        footer {
            margin-top: auto;
            background-color: var(--ss-dark);
            color: white;
            padding-top: 70px;
            padding-bottom: 30px;
        }
        footer h5 {
            color: var(--ss-accent);
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        footer p, footer a { color: #dbe9f6; text-decoration: none; font-size: 1rem; }
        footer a:hover { color: white; }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 50px;
            padding-top: 25px;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.5);
        }
    </style>
</head>
<body>

    <div class="top-bar d-none d-lg-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-certificate me-2 text-info"></i> Excellence in Pharma Manufacturing
            </div>
            <div>
                <a href="mailto:ssindustriespharma@gmail.com" class="me-4"><i class="fas fa-envelope me-1"></i> ssindustriespharma@gmail.com</a>
                <a href="tel:+923299967777"><i class="fas fa-phone me-1"></i> 0329-9967777</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="SS Industries">
                <span>SS INDUSTRIES</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>

                    <li class="nav-item ms-lg-3">
                        <a class="nav-link btn-contact" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>SS Industries</h5>
                    <p>Dedicated to manufacturing high-quality medicines that meet international standards. Your trusted partner in healthcare excellence.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Get in Touch</h5>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i> 0329-9967777</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> ssindustriespharma@gmail.com</p>
                    <p class="mb-2"><i class="fas fa-globe me-2"></i> www.ssindustries.com</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Factory Location</h5>
                    <div class="d-flex">
                        <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                        <p>Plot no. 10, Street no. N5<br>RIE-5956, Rawat<br>Islamabad, Pakistan</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom text-center">
                <p class="mb-0">&copy; {{ date('Y') }} SS Industries. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
