<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
?>

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}
greeting::welcome();
?>