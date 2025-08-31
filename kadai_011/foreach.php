<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題11</title>
</head>

<body>
  <?php
  $items = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];

  foreach ($items as $key => $value) {
    echo "{$key} : {$value}<br>";
  }
  ?>
</body>
</html>