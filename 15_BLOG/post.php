<?php
include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }

}


?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam ipsum voluptate explicabo qui? Officia laborum illum aspernatur ex sed praesentium quos quod enim, vitae saepe. Blanditiis tenetur vel ut minus.
            Esse natus, voluptatem maiores deserunt reiciendis placeat magnam veniam, ipsam amet dolore culpa laborum beatae porro harum voluptate. Reprehenderit voluptatem iusto suscipit quod est beatae ea magni porro quia consequuntur.
            Eaque quidem perferendis sint voluptatibus a, hic eos veniam, eligendi dignissimos veritatis minus, modi dicta reprehenderit laborum repellat dolorum! Fugiat hic aliquam natus amet quis unde quaerat laudantium eligendi esse?
            Nostrum quidem amet incidunt aspernatur ex iste voluptates alias culpa voluptas maxime perferendis dolorum dolores laborum ea non autem, quos quod praesentium error fuga fugiat minus dolore. Voluptates, neque doloremque!
            Iste rerum reprehenderit harum et, earum corporis impedit vero voluptatibus saepe totam neque cupiditate quisquam. Porro magni qui ratione fuga aliquid esse ducimus explicabo, accusantium modi incidunt, vero nam sunt?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam ipsum voluptate explicabo qui? Officia laborum illum aspernatur ex sed praesentium quos quod enim, vitae saepe. Blanditiis tenetur vel ut minus.
            Esse natus, voluptatem maiores deserunt reiciendis placeat magnam veniam, ipsam amet dolore culpa laborum beatae porro harum voluptate. Reprehenderit voluptatem iusto suscipit quod est beatae ea magni porro quia consequuntur.
            Eaque quidem perferendis sint voluptatibus a, hic eos veniam, eligendi dignissimos veritatis minus, modi dicta reprehenderit laborum repellat dolorum! Fugiat hic aliquam natus amet quis unde quaerat laudantium eligendi esse?
            Nostrum quidem amet incidunt aspernatur ex iste voluptates alias culpa voluptas maxime perferendis dolorum dolores laborum ea non autem, quos quod praesentium error fuga fugiat minus dolore. Voluptates, neque doloremque!
            Iste rerum reprehenderit harum et, earum corporis impedit vero voluptatibus saepe totam neque cupiditate quisquam. Porro magni qui ratione fuga aliquid esse ducimus explicabo, accusantium modi incidunt, vero nam sunt?</p>
                         <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
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
            </div>
 
<?php
include_once("templates/footer.php");
?>