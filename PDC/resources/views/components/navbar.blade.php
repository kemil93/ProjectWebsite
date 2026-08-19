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