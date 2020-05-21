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