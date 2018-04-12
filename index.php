<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="style.css">
<?php
  if(isset($_GET['un'])) {
    $baseUrl = 'https://instagram.com/' . $_GET['un'] . '?__a=1';
    $json = json_decode(file_get_contents($baseUrl), true);
    extract([
      'images' => $json['graphql']['user']['edge_owner_to_timeline_media']['edges'],
      'user_name' => $json['graphql']['user']['full_name'],
      'user_link' => htmlspecialchars($json['graphql']['user']['username'])
    ]);
    require dirname(__FILE__) . '/temp.php';
  }
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script type="text/JavaScript">
  $('#js-instagram').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
</script>
