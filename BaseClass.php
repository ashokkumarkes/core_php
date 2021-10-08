<?php 
		class BaseClass {
      public $Name;
      public $RollNum;
       // public $Age;
        function __construct() {
            echo "Calling parent class constructor 1 \n";
            echo "<pre>";
        }
       public function __get($var) {
           print "Attempted to retrieve $var and failed...\n";
       }

}

class SubClass extends BaseClass {
  function __construct() {
      parent::__construct();
      echo"<pre>";
      echo "Calling child class constructor \n";
  }
}

$obj = new BaseClass();

$obj = new SubClass();
 print $obj->Age;
?>