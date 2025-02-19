<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Menji DRC</title>

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

        .blog-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            margin-bottom: 2rem;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .blog-content {
            padding: 2rem;
        }

        .blog-meta {
            color: var(--primary);
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <!-- Inclure la navigation -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/omego_logo.png') }}" alt="Menji DRC" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects">Gestion de Projet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="bg-dark text-white py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Blog</h1>
                    <p class="lead mb-0">Restez informé des dernières tendances technologiques, conseils pratiques, et
                        articles inspirants. Suivez notre blog pour des insights utiles sur l'univers numérique et la
                        transformation digitale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Article Example -->
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <img src="{{ asset('images/blog1.jpg') }}" alt="Article 1" class="blog-image">
                        <div class="blog-content">
                            <div class="blog-meta mb-2">
                                <span><i class="fas fa-calendar-alt me-2"></i>22 Mars 2024</span>
                                <span class="ms-3"><i class="fas fa-tag me-2"></i>Technologie</span>
                            </div>
                            <h3 class="h4 mb-3">L'avenir de l'Intelligence Artificielle</h3>
                            <p class="text-muted">Découvrez comment l'IA transforme le paysage numérique et son impact
                                sur les entreprises...</p>
                            <a href="#" class="btn btn-primary">Lire la suite</a>
                        </div>
                    </article>
                </div>
                <!-- Ajoutez d'autres articles ici -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="mb-4">Restez informé</h2>
                    <p class="text-muted mb-4">Inscrivez-vous à notre newsletter pour recevoir nos derniers articles et
                        actualités.</p>
                    <form class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Votre email">
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </form>
                </div>
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
