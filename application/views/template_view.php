<?php
$version = time();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Xans</title>

    <link href="/css/media.css<?php echo $version;?>" rel="stylesheet">
    <link href="/css/style_site.css" rel="stylesheet">
    <link href="/css/style_pages.css" rel="stylesheet">
    <link href="/css/style_auth.css" rel="stylesheet">
    <link href="/css/style_search.css" rel="stylesheet">
    <link href="/css/style_comics.css" rel="stylesheet">
    <link href="/css/style_404.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/assets/owl.theme.default.min.css">
</head>

<body>

<ul class="left-menu">
    <li>
        <a href="/auth" class="user_circle" >
                <span class="material-icons">
                    account_circle
                </span>
        </a>
    </li>
    <li>
        <a href="/">
                <span class="material-icons">
                    home
                </span>
        </a>
    </li>
    <li>
        <a href="/favorite">
                <span class="material-icons md-56">
                    favorite
                </span>
        </a>
    </li>
    <li>
        <a href="/search">
                <span class="material-icons md-56">
                    search
                </span>
        </a>
    </li>
    <li>
        <a href="/store">
                <span class="material-icons md-56">
                    shopping_cart
                </span>
        </a>
    </li>
    <li>
        <a href="/settings" class="settings">
                <span class="material-icons md-36">
                    settings
                </span>
        </a>
    </li>
</ul>

<div class="main">
    <?php
    include "application/views/".$content_view;
    ?>

</div>

<ul class="bottom-menu">
    <li>
        <a href="/">
                <span class="material-icons">
                    home
                </span>
        </a>
    </li>
    <li>
        <a href="/favorite">
                <span class="material-icons">
                    favorite
                </span>
        </a>
    </li>
    <li>
        <a href="/search">
                <span class="material-icons">
                    search
                </span>
        </a>
    </li>
    <li>
        <a href="/store">
                <span class="material-icons">
                    shopping_cart
                </span>
        </a>
    </li>
    <li>
        <a href="/settings" class="settings">
                <span class="material-icons">
                    settings
                </span>
        </a>
    </li>
</ul>

<script src="/js/jquery.js"></script>
<script src="/owlcarousel/owl.carousel.min.js"></script>
<script src="/js/setting_carousel.js"></script>
</body>
</html>