<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題16</title>
</head>
<body>
  <?php
  class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function show_price() {
      echo $this->price;
    }
  }
  class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function show_height() {
      echo $this->height;
    }
  }
  $food = new Food("りんご", 100);
  $animal = new Animal("犬", 50, 20);
  print_r($food);
  echo "<br>";
  print_r($animal);
  echo "<br>";
  $food->show_price();
  echo "<br>";
  $animal->show_height();
  ?>
</body>
</html>
