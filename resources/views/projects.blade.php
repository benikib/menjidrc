<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos Projets - Menji DRC</title>

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
        /* Réutilisation des styles de base */
        :root {
            --primary: #0ea5e9;
            --secondary: #7dd3fc;
            --dark: #0f172a;
            --light: #f8fafc;
            --accent: #f472b6;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-content {
            padding: 1.5rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem 0;
        }
    </style>
</head>

<body>
    <!-- Inclure la navigation -->
    @include('partials.navigation')

    <!-- Hero Section -->
    <section class="bg-dark text-white py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Nos Projets</h1>
                    <p class="lead mb-0">Découvrez nos projets réalisés, témoignages et études de cas. Nous sommes fiers
                        de montrer comment nos solutions ont fait la différence pour nos clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projets Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Exemple de projet -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('images/project1.jpg') }}" alt="Projet 1" class="project-image">
                        <div class="project-content">
                            <h5>Application E-commerce</h5>
                            <p class="text-muted">Développement d'une plateforme de vente en ligne complète avec système
                                de paiement intégré.</p>
                            <a href="#" class="btn btn-primary">Voir le projet</a>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez d'autres projets ici -->
            </div>
        </div>
    </section>

    <!-- Témoignages Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Témoignages Clients</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <p class="mb-4">"Excellent travail, l'équipe de Menji DRC a parfaitement compris nos besoins."
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/client1.jpg') }}" alt="Client" class="rounded-circle" width="50">
                            <div class="ms-3">
                                <h6 class="mb-0">John Doe</h6>
                                <small class="text-muted">CEO, Company Inc</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez d'autres témoignages ici -->
            </div>
        </div>
    </section>

    <!-- Inclure le footer -->
    {{-- @include('partials.footer') --}}

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>