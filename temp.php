<div class="instagram-slider" id="js-instagram">
  <?php foreach($images as $image): ?>
    <a href="https://instagram.com/p/<?= $image['node']['shortcode']; ?>?taken-by=<?= htmlspecialchars($_GET['un']); ?>" target="_blank" class="instagram-slider__item" style="background-image: url('<?= htmlspecialchars($image['node']['thumbnail_src']); ?>');">
      <div class="instagram-slider__caption">
        <span onclick="window.open('https://instagram.com/<?= $user_link; ?>')">@<?= $user_link; ?>:</span>
        <? if(empty($image['node']['edge_media_to_caption']['edges']['0']['node']['text']) == false) {
          echo($image['node']['edge_media_to_caption']['edges']['0']['node']['text']);
        } else {
          echo('Нет записей');
        } ?>
      </div>
    </a>
  <?php endforeach; ?>
</div>
