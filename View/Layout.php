<?php
//require_once $headerPath;
//require "View\Components\Footer.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/View/Style/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">


    <script src="https://kit.fontawesome.com/bf0671b196.js" crossorigin="anonymous"></script>
    <!-- CSS only  http://localhost:8086/ -->
    <!--<link rel="stylesheet" href="/View/Style/CSS/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 -->
    <!-- JavaScript Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="manifest" href="./manifest.json">

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module" src="View/JS/Accordion.js" defer></script>

    <script>
        if('serviceWorker' in navigator) {
            navigator.serviceWorker.register('./sw.js', { scope: './' })
        }
    </script>

</head>
<body>

<!-- Page Content -->

<main class="container">
    <?= $contenu; ?>
</main>
<!-- /.container -->
<!-- FOOTER -->
<footer>
<?php if(isset($footer)) {
    require $footer; ?>
    <?= $menu; ?>
    <?php } ?>
</footer>

<!-- /FOOTER -->

</body>

</html>
