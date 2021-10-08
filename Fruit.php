<?php


trait hello{
  public function display(){
    echo "display function from trait<br>";
  }
}

class Personal {
  protected static $name = "yahoo <br>";

  public function show(){
    
    // echo static::$name." ";
    // echo self::$name;
  }
  
}

class accounts  extends Personal{
  use hello;
  protected static $name = "baba";
  public function display(){
    echo "display function from accounts class <br>";
  }
}
$test = new accounts();
 // $test->show();
 $test->display();

?>
