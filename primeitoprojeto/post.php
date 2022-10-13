<?php
    include_once ("templates/header.php");


    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;
    }
    foreach($posts as $post) {
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>" >
        </div>
    
        <p id="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. At officiis fuga ipsam quidem culpa accusantium necessitatibus, beatae non sequi mollitia consequatur blanditiis ut saepe praesentium dolor ipsa repellendus unde pariatur!
        Itaque eos veniam consectetur mollitia. At ea eius corrupti temporibus molestiae reprehenderit cumque similique, eum, saepe velit harum sequi odit ullam quo, deserunt voluptatibus fugiat quaerat libero nemo a. Commodi?
        Eum consequuntur voluptatibus quas reprehenderit vero odio vel dicta corporis et facilis tenetur culpa unde accusamus saepe quae adipisci corrupti totam consequatur quisquam temporibus, cupiditate alias voluptates sit! Ex, dolore.
        Ex, sequi! Enim aliquam magni earum ipsam soluta corrupti distinctio accusantium accusamus itaque voluptatibus veritatis, culpa cupiditate facilis. Impedit alias molestias quo atque libero animi ea ab reprehenderit expedita. Impedit.
        Assumenda, labore voluptatum laboriosam temporibus in molestiae velit quam optio! Recusandae voluptatibus animi hic nostrum placeat quibusdam tenetur dolore aliquid excepturi libero molestiae, ad, odit numquam accusamus quos illo similique?</p>
        <p id="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. At officiis fuga ipsam quidem culpa accusantium necessitatibus, beatae non sequi mollitia consequatur blanditiis ut saepe praesentium dolor ipsa repellendus unde pariatur!
        Itaque eos veniam consectetur mollitia. At ea eius corrupti temporibus molestiae reprehenderit cumque similique, eum, saepe velit harum sequi odit ullam quo, deserunt voluptatibus fugiat quaerat libero nemo a. Commodi?
        Eum consequuntur voluptatibus quas reprehenderit vero odio vel dicta corporis et facilis tenetur culpa unde accusamus saepe quae adipisci corrupti totam consequatur quisquam temporibus, cupiditate alias voluptates sit! Ex, dolore.
        Ex, sequi! Enim aliquam magni earum ipsam soluta corrupti distinctio accusantium accusamus itaque voluptatibus veritatis, culpa cupiditate facilis. Impedit alias molestias quo atque libero animi ea ab reprehenderit expedita. Impedit.
        Assumenda, labore voluptatum laboriosam temporibus in molestiae velit quam optio! Recusandae voluptatibus animi hic nostrum placeat quibusdam tenetur dolore aliquid excepturi libero molestiae, ad, odit numquam accusamus quos illo similique?</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-tittle">Tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
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
    include_once ("templates/footer.php");
?>