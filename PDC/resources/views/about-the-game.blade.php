<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About The Game</title>
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap');   
    </style>
</head>
<body>

    <header>
            <h1>What's this Game</h1>
    </header>
    <hr>
    <main>
        <p>
            <strong>Project Dungeon Crawler</strong>  (WIP name) is a classic Dungeon Crawler adventure developed by two <span style="font-weight:900; color: rgb(128, 0, 0)">gamers</span> with the sole focus of developing a fun game.
        </p>
        <ul><a href="{{ route('enemies') }}">Enemies</a></ul>
    </main>
    <footer>
        <a href="{{ route('about-us') }}">about us</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>