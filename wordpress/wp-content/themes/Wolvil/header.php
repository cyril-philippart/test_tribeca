<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="wp-content/themes/Wolvil/style.css">
    <script src="https://kit.fontawesome.com/663b1e4bdb.js" crossorigin="anonymous"></script>
    <title>Wolvil</title>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="headerWolvil">
            <img class="logoWolvil" src="wp-content/themes/Wolvil/images/Logo Wolvil.png" alt="logo Wolvil">
            <div id="hamburger">
                <div id="hamburger-content">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Wolvil Art</a></li>
                            <li><a href="#">Wolvil Cars</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <button id="hamburger-button">&#9776;</button>
                <div id="hamburger-sidebar">
                    <div id="hamburger-sidebar-header"></div>
                    <div id="hamburger-sidebar-body"></div>
                </div>
                <div id="hamburger-overlay"></div>
            </div>
        </div>
    </header>