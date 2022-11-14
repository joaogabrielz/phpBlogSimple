<?php
include_once("templates/header.php");

if(isset($_GET['id'])){

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if($post['id'] == $postId){
      $currentPost = $post;
    }
  }
}
?>
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"> <?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus reprehenderit modi quasi earum quia nihil soluta officia harum unde? Placeat aut nemo corrupti perspiciatis! Veritatis animi vero corrupti iste vel.
    Dolorum aspernatur ipsa minus officiis! Totam commodi error, velit eveniet cumque quaerat incidunt repudiandae sed consequatur blanditiis delectus porro iusto, accusantium voluptate ratione ut maiores vero maxime ab est iure?
    Ducimus quia earum quidem cupiditate illum adipisci saepe tempore eius laborum. Odio, ipsum magni ex harum ipsa, laborum quae adipisci at exercitationem dignissimos modi nobis dicta sit necessitatibus dolorum. Doloremque?
    Voluptatem laboriosam modi quo iusto qui. Facere doloremque modi perferendis repudiandae eligendi ratione, deserunt vero laborum in architecto mollitia quisquam expedita accusamus iure exercitationem eius quia earum hic dolorem quis?
    Possimus eius dicta aliquam praesentium aspernatur, animi dolor? Eum rem ab, maiores deserunt minus, esse aspernatur, placeat reiciendis at deleniti mollitia non error necessitatibus expedita est ipsum voluptatem fugiat. Animi?
    </p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus reprehenderit modi quasi earum quia nihil soluta officia harum unde? Placeat aut nemo corrupti perspiciatis! Veritatis animi vero corrupti iste vel.
    Dolorum aspernatur ipsa minus officiis! Totam commodi error, velit eveniet cumque quaerat incidunt repudiandae sed consequatur blanditiis delectus porro iusto, accusantium voluptate ratione ut maiores vero maxime ab est iure?
    Ducimus quia earum quidem cupiditate illum adipisci saepe tempore eius laborum. Odio, ipsum magni ex harum ipsa, laborum quae adipisci at exercitationem dignissimos modi nobis dicta sit necessitatibus dolorum. Doloremque?
    Voluptatem laboriosam modi quo iusto qui. Facere doloremque modi perferendis repudiandae eligendi ratione, deserunt vero laborum in architecto mollitia quisquam expedita accusamus iure exercitationem eius quia earum hic dolorem quis?
    Possimus eius dicta aliquam praesentium aspernatur, animi dolor? Eum rem ab, maiores deserunt minus, esse aspernatur, placeat reiciendis at deleniti mollitia non error necessitatibus expedita est ipsum voluptatem fugiat. Animi?
    </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
          <?php foreach($currentPost['tags'] as $tag): ?>
            <li> <a href="#"><?= $tag ?></a> </li> 
          <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul class="categories-list">
          <?php foreach($categories as $categorie): ?>
            <li><a href="#"><?= $categorie ?></a> </li> 
          <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
  include_once('templates/footer.php');
?>