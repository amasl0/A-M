<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>

    <link href="wwwroot/css/media.css" rel="stylesheet">
    <link href="wwwroot/css/site.css" rel="stylesheet">
    <link href="wwwroot/css/Pages.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <script src="wwwroot/js/site.js"></script>
</head>

<body>
<ul class="left-menu">
    <li>
        <a href="#" class="user_circle">
                <span class="material-icons">
                    account_circle
                </span>
        </a>
    </li>
    <li>
        <a href="https://vk.com/">
                <span class="material-icons">
                    home
                </span>
        </a>
    </li>
    <li>
        <a href="https://vk.com/">
                <span class="material-icons md-56">
                    favorite
                </span>
        </a>
    </li>
    <li>
        <a href="https://vk.com/">
                <span class="material-icons md-56">
                    search
                </span>
        </a>
    </li>
    <li>
        <a href="#">
                <span class="material-icons md-56">
                    shopping_cart
                </span>
        </a>
    </li>
    <li>
        <a href="#" class="settings">
                <span class="material-icons md-36">
                    settings
                </span>
        </a>
    </li>
    <!-- Если нужно установить активную вкладку:
    <li class="cbp-vicurrent"><a href="#" class="icon-pencil">Редактор</a></li>
    -->
</ul>

<div class="main">
<!--    <h1 class="names_pages">Домашняя страница</h1>-->
<!---->
<!--    -->
<!--    <div class="content">-->
<!--        <h2>Заполните анкету, чтобы мы могли подобрать комиксы</h2>-->
<!--    -->
<!--    </div>-->
    <?php
        include "Search.php";
    ?>

</div>

<ul class="bottom-menu">
    <li>
        <a href="#">
                <span class="material-icons">
                    home
                </span>
        </a>
    </li>
    <li>
        <a href="#">
                <span class="material-icons">
                    favorite
                </span>
        </a>
    </li>
    <li>
        <a href="#">
                <span class="material-icons">
                    search
                </span>
        </a>
    </li>
    <li>
        <a href="#">
                <span class="material-icons">
                    shopping_cart
                </span>
        </a>
    </li>
    <li>
        <a href="#" class="settings">
                <span class="material-icons">
                    settings
                </span>
        </a>
    </li>
</ul>

<!--<script type="text/javascript" src="wwwroot/lib/jquery/dist/jquery.js"></script>-->
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<!--<script type="text/javascript" src="slick/slick.min.js"></script>-->
</body>
</html>