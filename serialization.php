<?php 
    class person{
        public $name ;
        public $number ; 
        public $credit_card_no;
        public function __sleep()
        {
            // 
           echo"sleep method <br/>";
           return array('name','number','credit_card_no');
        }
        public function __wakeup()
        {
            echo "wakeup functions <br/>";
           return array('name','number','credit_card_no');
            // echo implode(" ",$arr);
        }
    }

    $obj =new person();
    $obj->name = "Ashok kumar";
    $obj->number = "9769105343";
    $obj->credit_card_no ="123456789";
    $ser = serialize($obj);
    echo $ser;
   
    echo"<pre>";
    $o = unserialize($ser);
    print_r($o);
?>