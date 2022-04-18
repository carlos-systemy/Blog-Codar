
  
<?php
    include_once('templates/header.php');
    include_once('templates/footer.php');
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
    }
    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">
            Numa explicação de poucas palavras, PHP é uma linguagem de programação 
        utilizada por programadores e desenvolvedores para construir sites dinâmicos, 
        extensões de integração de aplicações e agilizar no desenvolvimento de um 
        sistema.
            Essa linguagem é mundialmente conhecida e uma das mais utilizadas pela facilidade
        em aprendê-la, manuseá-la, além de ser compatível com quase todos os sistemas 
        operacionais que existem – o que torna seu custo menor. Neste artigo nós vamos 
        mostrar a importância dessa sigla, além da estrutura e vantagens dessa linguagem.
        Numa explicação de poucas palavras, PHP é uma linguagem de programação 
        utilizada por programadores e desenvolvedores para construir sites dinâmicos, 
        extensões de integração de aplicações e agilizar no desenvolvimento de um 
        sistema.
            Essa linguagem é mundialmente conhecida e uma das mais utilizadas pela facilidade
        em aprendê-la, manuseá-la, além de ser compatível com quase todos os sistemas 
        operacionais que existem – o que torna seu custo menor. Neste artigo nós vamos 
        mostrar a importância dessa sigla, além da estrutura e vantagens dessa linguagem.
        </p>
        <p class="post-content">
            Numa explicação de poucas palavras, PHP é uma linguagem de programação 
        utilizada por programadores e desenvolvedores para construir sites dinâmicos, 
        extensões de integração de aplicações e agilizar no desenvolvimento de um 
        sistema.
            Essa linguagem é mundialmente conhecida e uma das mais utilizadas pela facilidade
        em aprendê-la, manuseá-la, além de ser compatível com quase todos os sistemas 
        operacionais que existem – o que torna seu custo menor. Neste artigo nós vamos 
        mostrar a importância dessa sigla, além da estrutura e vantagens dessa linguagem.
        Numa explicação de poucas palavras, PHP é uma linguagem de programação 
        utilizada por programadores e desenvolvedores para construir sites dinâmicos, 
        extensões de integração de aplicações e agilizar no desenvolvimento de um 
        sistema.
            Essa linguagem é mundialmente conhecida e uma das mais utilizadas pela facilidade
        em aprendê-la, manuseá-la, além de ser compatível com quase todos os sistemas 
        operacionais que existem – o que torna seu custo menor. Neste artigo nós vamos 
        mostrar a importância dessa sigla, além da estrutura e vantagens dessa linguagem.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $post_tag):?>
            <li>  
                <a href="#"><?=$post_tag?></a>
            </li>  
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $categoria):?>
            <li> 
                <a href="#"><?=$categoria?></a>
            </li>  
            <?php endforeach;?>
        </ul>
    </aside>
</main>