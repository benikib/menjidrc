<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Menji DRC - Solutions numériques innovantes pour la transformation digitale">

    <title>Menji DRC - Innovation Numérique</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/omego_logo.png') }}" type="image/png">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        :root {
            --primary: #0ea5e9;
            --secondary: #7dd3fc;
            --dark: #0f172a;
            --light: #f8fafc;
            --accent: #f472b6;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--light);
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 80vh;
            background: var(--dark);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 20%, var(--primary) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, var(--accent) 0%, transparent 50%);
            opacity: 0.1;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            padding: 4rem 0;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .floating-card {
            transform-style: preserve-3d;
            transition: all 0.3s ease;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .stats-card {
            background: white;
            border-radius: 20px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact-form {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        }

        .custom-btn {
            padding: 0.8rem 2rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .custom-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            opacity: 0;
            transition: all 0.3s ease;
        }

        .custom-btn:hover::before {
            opacity: 1;
        }

        .mouse-cursor {
            width: 20px;
            height: 20px;
            border: 2px solid var(--primary);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: all 0.1s ease;
        }

        @media (max-width: 768px) {
            .hero-content {
                padding: 4rem 0;
            }

            .stats-card {
                margin-bottom: 1rem;
            }
        }

        section {
            padding: 60px 0;
            margin: 20px 0;
        }

        .container {
            max-width: 1140px;
            padding: 0 20px;
        }

        .service-card {
            padding: 2rem;
            margin: 10px 0;
            min-height: 250px;
        }

        .stats-card {
            padding: 2rem 1.5rem;
            margin: 15px 0;
        }

        .row {
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            section {
                padding: 80px 0;
                margin: 20px 0;
            }

            .service-card {
                min-height: auto;
                padding: 2rem;
            }
        }

        .display-3 {
            font-size: 2.5rem;
        }

        .display-4 {
            font-size: 2rem;
        }

        .lead {
            font-size: 1.1rem;
        }
    </style>
</head>

<div class="mouse-cursor"></div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-3 text-white fw-bold mb-4">
                        Bienvenue chez <span class="gradient-text">Menji DRC</span>
                    </h1>
                    <p class="lead text-white-50 mb-5">
                        Leader en solutions numériques innovantes, Menji DRC transforme
                        vos idées en réalités digitales. Spécialisés dans la numérisation des écoles,
                        hôpitaux et entreprises.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#services" class="custom-btn btn btn-primary">
                            Découvrir nos services
                        </a>
                        <a href="#contact" class="custom-btn btn btn-outline-light">
                            Parlons de votre projet
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/hero-illustration.svg') }}" alt="Innovation" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-6">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h2 class="display-4 fw-bold mb-4">Solutions <span class="gradient-text">Menji DRC</span>
                </h2>
                <p class="lead text-muted mb-5">
                    Découvrez notre gamme complète de services numériques innovants,
                    conçus pour propulser votre organisation vers l'avenir
                </p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Services Cards -->
            @foreach([['icon' => 'graduation-cap', 'title' => 'Formation Professionnelle', 'description' => 'Programmes de formation spécialisés et certifiants pour développer les compétences de vos équipes.'], ['icon' => 'bullhorn', 'title' => 'Marketing Digital', 'description' => 'Stratégies marketing innovantes et solutions personnalisées pour maximiser votre présence en ligne.'], ['icon' => 'mobile-alt', 'title' => 'Applications Sur Mesure', 'description' => 'Développement d\'applications web et mobiles adaptées à vos besoins spécifiques.'], ['icon' => 'paint-brush', 'title' => 'Design & Création', 'description' => 'Création d\'interfaces modernes et ergonomiques pour une expérience utilisateur optimale.']] as $service)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="service-card floating-card">
                        <div class="service-icon">
                            <i class="fas fa-{{ $service['icon'] }}"></i>
                        </div>
                        <h5 class="mb-3">{{ $service['title'] }}</h5>
                        <p class="text-muted mb-0">{{ $service['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-6 bg-dark">
    <div class="container">
        <div class="row">
            @foreach([['number' => '100+', 'label' => 'Projets Réalisés'], ['number' => '50+', 'label' => 'Clients Satisfaits'], ['number' => '5+', 'label' => 'Années d\'Excellence'], ['number' => '24/7', 'label' => 'Support Client']] as $stat)
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="stats-card">
                        <div class="stats-number">{{ $stat['number'] }}</div>
                        <p class="text-muted mb-0">{{ $stat['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="contact-form">
                    <h2 class="text-center gradient-text mb-4">Contactez Menji DRC</h2>
                    <p class="text-center text-muted mb-5">
                        Prêt à démarrer votre transformation numérique ?
                        Notre équipe d'experts est là pour vous accompagner.
                    </p>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Votre message"></textarea>
                        </div>
                        <button type="submit" class="custom-btn btn btn-primary w-100">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer pt-5 mt-5 opacity-8 shadow-dark border-radius-lg p-3">
    <div class="container">
        <div class=" row">
            <div class="col-md-2 mb-4 ms-auto  ">

                <img src="{{ Storage::url('images/Omego_logo.png')}}" class="rounded " alt="Omega"
                    style="width: 50px; height: 50px;">


                <div class="mt-4">
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="#">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="#">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="#">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pe-1" href="#">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="#">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>





            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Pages</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/')}}">
                                Accueill
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pages/contact')}}">
                                Nous Contactez
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/pages/about')}}">
                                Apropos de nous
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" btn btn-default btn-flat float-right"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>Deconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">services</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Formations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Marketing Digital
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Apps
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Webdesign
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Découvrir</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pages/actualite')">
                                Actualités
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Terms & Conditions
                            </a>
                        </li>


                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        All rights reserved. Copyright ©
                        <script>document.write(new Date().getFullYear())</script> Menji DRC <a href="#">Structure</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    // Initialisation des animations
    AOS.init({
        duration: 800,
        once: true
    });

    // Effet de curseur personnalisé
    document.addEventListener('mousemove', (e) => {
        const cursor = document.querySelector('.mouse-cursor');
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Effet 3D sur les cartes
    document.querySelectorAll('.floating-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = -(x - centerX) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
        });
    });
</script>

<body>

</body>

</html>
