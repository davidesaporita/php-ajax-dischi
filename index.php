<?php 

include_once __DIR__ . '/dist/partials/data/db.php';
$main_css = 'dist/assets/css/main.css';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $main_css; ?>">
    <title>Php Ajax Dischi</title>
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="container">
                <img class="header__logo" src="src/img/logo.png" alt="logo" />
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <ul class="album-list">
                    <?php foreach($collection as $item) { ?>
                        <li class="album-list__item">
                            <img class="album-list__item__cover" 
                                 src="<?php echo $item['cover']; ?>"
                                 alt="<?php echo $item['title']; ?>">
                            <span class="album-list__item__title"><?php echo $item['title']; ?></span>
                            <span class='album-list__item__author'><?php echo $item['author'] ?></span>
                            <span class="album-list__item__year"><?php echo $item['year']; ?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </main>
        <footer class="footer">

        </footer>
    </div>
</body>
</html>