<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      class Product {
        public $name;

        public function set_name(string $name) {
          $this->name = $name;
        }
        public function show_name() {
          echo $this->name . '<br>';
        }
      }

      $coffee = new Product();

      $coffee->set_name('コーヒー');
      $coffee->show_name();

      $shampoo = new Product();

      $shampoo->name = 'シャンプー';

      echo $shampoo->name;
    ?>
  </p>
  <p>
    <?php
    class User {
      private $name;
      private $age;
      private $gender;

      public function __construct(string $name, int $age, string $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
      }
    }

    $user = new User('侍太郎', 36, '男性');

    print_r($user);
    ?>
  </p>
  <p>
    <?php
    class Event {
      private $name;
      private $date;
      private $location;

      public function __construct(string $name, string $date, string $location) {
        $this->name = $name;
        $this->date = new DateTime($date);
        $this->location = $location;
      }

      // ゲッターを追加
      public function getName() {
        return $this->name;
      }
      public function getDate() {
        return $this->date->format('Y-m-d');
      }
      public function getLocation() {
        return $this->location;
      }

      // イベント開始日までの日数を返すメソッド
      public function getDaysUntil() {
        $today = new DateTime();
        $interval = $today->diff($this->date);
        return $interval->days;
      }
    }

    // インスタンス作成
    $event = new Event(
      'プログラミング初心者向けセミナー',
      '2025-09-10', // 未来の日付
      '東京国際フォーラム'
    );

    // ゲッターで値を出力
    echo 'イベント名: ' . $event->getName() . '<br>';
    echo '開催日: ' . $event->getDate() . '<br>';
    echo '開催場所: ' . $event->getLocation() . '<br>';

    // 開催日までの日数を出力
    echo '開催日まであと: ' . $event->getDaysUntil() . '日<br>';
    ?>
  </p>
</body>

</html>