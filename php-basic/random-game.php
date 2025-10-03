<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>数字あてゲーム</title>
</head>
<body>
  <h1>数字あてゲーム</h1>
  <form method="post">
    <label for="guess">1〜100の数字を入力してください：</label>
    <input type="number" name="guess" id="guess" min="1" max="100" required>
    <button type="submit">送信</button>
  </form>
  <p>
    <?php
    session_start();

    // 乱数の保存と初期化
    if (!isset($_SESSION['answer'])) {
      $_SESSION['answer'] = mt_rand(1, 100);
    }
    $answer = $_SESSION['answer'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $guess = isset($_POST['guess']) ? intval($_POST['guess']) : null;

      if ($guess < 1 || $guess > 100) {
        echo '数字は1から100の間で入力してください';
      } else {
        if ($guess > $answer) {
          echo 'もっと小さいです！';
        } elseif ($guess < $answer) {
          echo 'もっと大きいです！';
        } else {
          echo '正解です！おめでとうございます！';
          // 正解したら乱数をリセット
          $_SESSION['answer'] = mt_rand(1, 100);
        }
      }
    }
    ?>
  </p>
</body>
</html>