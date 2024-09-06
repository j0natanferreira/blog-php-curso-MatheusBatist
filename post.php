<?php
    include_once("templates/header.php");

    // Verifica se retornou o id do post
    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }else {
        echo 'Nada';
    }
?>  
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet inventore voluptatum beatae. Commodi laudantium dolorem assumenda ullam perspiciatis possimus laboriosam, aut libero placeat obcaecati dolorum odio maxime ipsa? Aliquid, cum.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam itaque voluptatibus eveniet eligendi ipsum earum, cupiditate, eaque fugit rem dolores vel sequi necessitatibus harum ducimus porro consequatur. Architecto, facilis officiis!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem tempore ipsa ipsum enim vero consectetur placeat explicabo saepe iste, velit eos rem unde quidem aliquid ad suscipit voluptates voluptate autem!
            </p>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet inventore voluptatum beatae. Commodi laudantium dolorem assumenda ullam perspiciatis possimus laboriosam, aut libero placeat obcaecati dolorum odio maxime ipsa? Aliquid, cum.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam itaque voluptatibus eveniet eligendi ipsum earum, cupiditate, eaque fugit rem dolores vel sequi necessitatibus harum ducimus porro consequatur. Architecto, facilis officiis!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem tempore ipsa ipsum enim vero consectetur placeat explicabo saepe iste, velit eos rem unde quidem aliquid ad suscipit voluptates voluptate autem!
            </p>
        </div>

        <aside class="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li>
                        <a href=""><?= $tag ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>