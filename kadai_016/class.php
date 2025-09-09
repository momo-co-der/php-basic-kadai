<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題16</title>
</head>
<body>

<p>
  <?php
  
  // クラスを定義する
  class Food {
    private $name;
    private $price;
  
    // コンストラクタを定義する
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }
    // メソッドを定義する
    public function show_price() {
        echo $this->price;
    }
  }
  
  // クラスを定義する
  class Animal {
    private $name;
    private $height;
    private $weight;
  
    // コンストラクタを定義する
    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    // メソッドを定義する
    public function show_height() {
        echo $this->height;
    }
  }


  // インスタンス化する
  $food = new Food('potato', 250);
  $animal = new Animal('dog', 60, 5000);

  // インスタンスを出力する
  print_r($food);
  echo '<br>';
  print_r($animal);

  echo '<br>';
  
  // メソッドにアクセスして実行する
  $food->show_price();
  echo '<br>';
  $animal->show_height();
  
  ?>
</p>

</body>
</html>