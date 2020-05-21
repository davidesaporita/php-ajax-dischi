<main class="main-content">
    <div class="container">
        <ul class="album-list">
            <?php 
            if(!empty($_GET['q'])) {
                $query = strtolower(trim($_GET['q']));
            } else {
                $query = "";
            }
            foreach($collection as $item) {
                if($query !== "" && $query !== null) {
                    $checkTitle  = strpos(strtolower($item['title']), $query);
                    $checkAuthor = strpos(strtolower($item['author']), $query);
                    $checkYear   = strpos(strtolower($item['year']), $query);
                } else {
                    $checkTitle = $checkAuthor = $checkYear = false;
                }
                if($checkTitle !== false || $checkAuthor !== false || $checkYear !== false || $query == "" || $query === null) { ?>
                    <li class="album-list__item">    
                        <img class="album-list__item__cover" 
                            src="<?php echo $item['cover']; ?>"
                            alt="<?php echo $item['title']; ?>">
                        <span class="album-list__item__title"><?php echo $item['title']; ?></span>
                        <span class='album-list__item__author'><?php echo $item['author'] ?></span>
                        <span class="album-list__item__year"><?php echo $item['year']; ?></span>
                    </li>
            <?php   
                }
            }
            ?>
        </ul>
    </div>
</main>