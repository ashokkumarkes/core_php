<?php 
    class MyClass {

            private $myProperty = 'test';
            private function myPrivateMethod() {
                return $this->myProperty;
            }

            public function myPublicMethod() {
                return $this->myPrivateMethod();
            }

            public function modifyPrivatePropertyOf(MyClass $anotherInstance) {
                    $anotherInstance->myProperty = "new value";
            }
        }

        class MySubClass extends MyClass {
            public function run() {
                echo $this->myPublicMethod();
            }
            public function runWithPrivate() {
                echo $this->myPrivateMethod();
            }
        }
        $obj = new MySubClass();
        $newObj = new MySubClass();
        
        $obj->run();
        // Out: test
        $obj->modifyPrivatePropertyOf($newObj);
        $newObj->run();
        // Out: new value
        echo $obj->myPrivateMethod(); 
        
        echo $obj->runWithPrivate();
?>