<?php
include_once("templates/header.php");

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
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo necessitatibus veritatis quam minus illum dicta fuga libero, dolorum nobis natus a illo. Fugit iure repellendus porro obcaecati quis aperiam?
      Aliquid optio amet sed eius odit dolor ullam sequi modi minus temporibus, consequatur placeat dolore perspiciatis maiores sit distinctio, magnam eaque. Architecto a qui, at et quod eveniet rerum repellendus.
      Laudantium reiciendis doloribus ab aut possimus deserunt, perferendis aliquid quam illum dolor esse iure perspiciatis pariatur porro suscipit maiores facere earum sed, ea laborum accusantium. At debitis amet quos. Laborum!
      Fugit voluptate velit eum beatae repellendus. Possimus soluta saepe quae, officia sunt maiores, laborum velit minima deleniti, quibusdam doloribus fugit optio. Neque hic omnis voluptatum obcaecati ullam quis minima nulla?
      Voluptatibus nisi eum, maxime necessitatibus corporis earum illo dolore dolores commodi? Earum, ullam minus cumque, odio consequuntur quasi sunt a qui harum voluptate quae officia. Consectetur velit voluptatum beatae omnis?</p>

    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo necessitatibus veritatis quam minus illum dicta fuga libero, dolorum nobis natus a illo. Fugit iure repellendus porro obcaecati quis aperiam?
      Aliquid optio amet sed eius odit dolor ullam sequi modi minus temporibus, consequatur placeat dolore perspiciatis maiores sit distinctio, magnam eaque. Architecto a qui, at et quod eveniet rerum repellendus.
      Laudantium reiciendis doloribus ab aut possimus deserunt, perferendis aliquid quam illum dolor esse iure perspiciatis pariatur porro suscipit maiores facere earum sed, ea laborum accusantium. At debitis amet quos. Laborum!
      Fugit voluptate velit eum beatae repellendus. Possimus soluta saepe quae, officia sunt maiores, laborum velit minima deleniti, quibusdam doloribus fugit optio. Neque hic omnis voluptatum obcaecati ullam quis minima nulla?
      Voluptatibus nisi eum, maxime necessitatibus corporis earum illo dolore dolores commodi? Earum, ullam minus cumque, odio consequuntur quasi sunt a qui harum voluptate quae officia. Consectetur velit voluptatum beatae omnis?</p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>

    <h3 id="categories-title">Categories</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li></li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>


<?php
include_once("templates/footer.php");
?>