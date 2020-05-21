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
    <script id="result-template" type="text/x-handlebars-template">
        <li class="album-list__item">
            <img class="album-list__item__cover" 
                    src="{{ cover }}?>"
                    alt="{{ title }}">
            <span class="album-list__item__title">{{ title }}</span>
            <span class='album-list__item__author'>{{ author }}</span>
            <span class="album-list__item__year">{{ year }}</span>
        </li>
    </script>

</body>
</html>