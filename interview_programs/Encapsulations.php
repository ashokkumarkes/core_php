<?php
class Employee
{
   protected $employee_name;
   private $employee_id;

   public function __construct($emp_name, $emp_id)
   {
      $this->employee_name = $emp_name;
      $this->employee_id = $emp_id;
   }
   public function Employee_details()
   {
      echo "Employee name is $this->employee_name and Employee id is $this->employee_id";
   }
   protected function getEmpName($name){
      
     echo  $this->employee_name=$name;
   }

   // public function getName(){
   //    return $this->getEmpName();
   // }
}
class Test extends Employee{
   public function getName($name){
        $this->getEmpName($name);
   }
}
// $obj = new Employee("Ashok", "123456");
$obj2 = new Test("Ashok", "123456");

$obj2->getName("Ashok");
?>