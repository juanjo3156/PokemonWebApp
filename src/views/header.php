<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA;?>/dist/css/app.css">
    <title>Pokemon App</title>
    <script src="https://kit.fontawesome.com/9324a5a112.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="header__icon">
            <h1>My favorite Pokemon app</h1>

            <img src="<?php echo RUTA;?>/src/img/pokeball.png" alt="">
        </div>
        <div class="header__bar">
            <nav class="navigation">
                <ul class="navigation__ul">
                    <li class="navigation__li"><a href="#">Log in</a></li>
                    <li class="navigation__li"><a href="#">Sing Up</a></li>
                </ul>
            </nav>
        </div>
    </header>