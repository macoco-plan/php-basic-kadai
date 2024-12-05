<?php
// クラスを定義
class Food {
    // プロパティを定義
    private $name;
    private $price;
    public function show_price() {
        echo $this->price;
    }
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// インスタンス化する
$food = new Food('ラーメン', 1000);

// 出力する
print_r($food);

echo '<br>';

//
$food->show_price();

echo '<br>';



class Animal {
    private $name;
    private $height;
    private $weight;
    public function show_height() {
        echo $this->height;
	}
	public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

}
// インスタンス化する
$animal = new Animal('うさぎ', 100, 100);

// 出力する
print_r($animal);

echo '<br>';

//
$animal->show_height();

echo '<br>';



?>