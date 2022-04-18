<?php
    include_once("templates/header.php");
    
?>

<main>
    <div id="title-container">
        <h1>Blog codar</h1>
        <p>O seu blog de programção</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>

            <div class="post-box">
                <img src="/img/<?=$post['img']?>" alt="<?= $post['title']?>">
                <h2 class="post-title">
                <a href="post.php?id=<?=$post['id']?>"><?=$post['title']?></a>
                </h2>
                <p class="post-description"><?=$post['description']?></p>
                <div class="tags-container">
                        <?php foreach($post['tags'] as $tag):?>
                            <a href="#"><?=$tag?></a>
                        <?php endforeach;?>
                    </div>
            </div>

        <?php endforeach; ?>
    </div>
</main>


<h1>ola</h1>





<?php
    include_once("templates/footer.php");
    
?>