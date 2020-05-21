<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/css/main.css">
    <title>Php Ajax Dischi - Ajax Version</title>
</head>
<body>
    <div id="app">

        <?php include __DIR__ . '/partials/templates/header.php'; ?>      

        <main class="main-content">
            <div class="container">
                <ul class="album-list"></ul>
            </div>
        </main>

        <footer class="footer"></footer>
        
    </div>

    <!-- Handlebars Templates -->
    <script id="template" type="text/x-handlebars-template">
        <li class="album-list__item">
            <img class="album-list__item__cover" 
                 src="{{ cover }}"
                 alt="{{ title }}">
            <span class="album-list__item__title">{{ title }}</span>
            <span class='album-list__item__author'>{{ author }}</span>
            <span class="album-list__item__year">{{ year }}</span>
        </li>
    </script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="dist/scripts/js/main.js"></script>

</body>
</html>