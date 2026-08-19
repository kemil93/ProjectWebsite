<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bat</title>
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap');   
    </style>
</head>
<body>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-primary navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand img text-primary" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Dungeon Divers Logo" class="logo">
            </a>
            
        <button class="navbar-toggler text-tertiary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active text-primary" aria-current="page" href="{{ route('about-the-game') }}">About The Game</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-primary" href="{{ route('about-us' )}}">About Us</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Enemies
            </a>
            <ul class="dropdown-menu bg-primary">
                <li><a class="dropdown-item text-primary" href="{{ route('bat') }}">Bat</a></li>
                <li><a class="dropdown-item text-primary" href="{{ route('slime') }}">Slime</a></li>
                <li><a class="dropdown-item text-primary" href="{{ route('goblin') }}">Goblin</a></li>
                <li><hr class="dropdown-divider text-primary"></li>
                <li><a class="dropdown-item text-primary" href="{{ route('enemies') }}">All Enemies</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>  
    <header>
        <h1>Enemies</h1>
    </header>
        <main>
            <section class="d-flex justify-content-center">
                <article>
                    <div class="card bg-body-primary" style="width: 18rem;">
                    <h5 class="card-title text-center fw-bolder text-primary">Bat</h5>
                    <hr class="text-primary fw-bolder">
                    <img src="{{ asset('images/bat.png') }}" class="card-img-top shadow-lg img-fluid" alt="...">
                    <hr class="text-primary">
                    <div class="card-body shadow-lg">
                    <p class="card-text text-center">Enemies weak to physical projectiles</p>
                    </div>
                    </div>
                </article>
            </section>
        </main>
    <footer>
        <a href="{{ route('about-us') }}">About Us</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</body>
</html>