<?php
include_once "templates/header.php";


if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {

    if ($post['id'] == $postId) {
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
      <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam et quam fugiat aspernatur, nesciunt excepturi alias praesentium exercitationem? Quae officiis nisi perspiciatis ipsam at dolorem iste in minima error voluptatem?
      Officia excepturi eum obcaecati praesentium error numquam reiciendis commodi, non ad voluptatibus fugit, eius voluptatum! Totam quia eum molestias laboriosam expedita fugit? Debitis, omnis consequuntur quod dolor numquam doloremque! Pariatur?
      Nulla hic, iste deleniti quas aperiam eum possimus accusantium animi ad distinctio, labore voluptatum commodi libero accusamus minima vel excepturi at a maxime expedita. Accusamus, nam. Doloremque hic ipsam officia?
      Impedit, temporibus quas placeat sint consequatur, dicta cupiditate voluptatibus asperiores eos possimus earum laboriosam ducimus expedita, ex nemo atque et ad excepturi aspernatur? Tenetur nobis voluptas sunt architecto iusto vitae.
      Delectus animi, saepe culpa provident veritatis repellat accusamus aliquam repudiandae. Distinctio tempore aperiam totam. Quia nihil natus earum, praesentium nemo consequatur iusto, asperiores iure at aut eligendi, culpa est aliquid?
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam et quam fugiat aspernatur, nesciunt excepturi alias praesentium exercitationem? Quae officiis nisi perspiciatis ipsam at dolorem iste in minima error voluptatem?
      Officia excepturi eum obcaecati praesentium error numquam reiciendis commodi, non ad voluptatibus fugit, eius voluptatum! Totam quia eum molestias laboriosam expedita fugit? Debitis, omnis consequuntur quod dolor numquam doloremque! Pariatur?
      Nulla hic, iste deleniti quas aperiam eum possimus accusantium animi ad distinctio, labore voluptatum commodi libero accusamus minima vel excepturi at a maxime expedita. Accusamus, nam. Doloremque hic ipsam officia?
      Impedit, temporibus quas placeat sint consequatur, dicta cupiditate voluptatibus asperiores eos possimus earum laboriosam ducimus expedita, ex nemo atque et ad excepturi aspernatur? Tenetur nobis voluptas sunt architecto iusto vitae.
      Delectus animi, saepe culpa provident veritatis repellat accusamus aliquam repudiandae. Distinctio tempore aperiam totam. Quia nihil natus earum, praesentium nemo consequatur iusto, asperiores iure at aut eligendi, culpa est aliquid?
    </p>    
  </div>
  <aside id="nav-content">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?=$tag?></a></li>
        <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories  as $categorie): ?>
          <li><a href="#"><?=$categorie?></a></li>
        <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once "templates/footer.php";
?>