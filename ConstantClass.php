<?php 
    class Pie {
        protected $fruit;
            public function __construct($fruit) {
                $this->fruit = $fruit;
            }
        }
        $pie = new Pie("strawberry");
?>