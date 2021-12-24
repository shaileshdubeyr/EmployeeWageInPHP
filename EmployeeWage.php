<?php
class EmployeeWages{
    /**
     * no argumnet constructor
     * in constructor calling static function
     */
    function __construct()
    {
        self::checkingEmployeePresentOrAbsent();
    }

    /**
     * no argument function
     * checking employee is present or absent
     * no return type
     */
    static function checkingEmployeePresentOrAbsent(){
        /**
         * generatind random value
         */
        $randomValue = rand(0,1);
        if($randomValue == 1){
            echo "Employee is present\n";
        }else{
            echo "Employee is Absent\n";
        }
    }
}
$employeewage = new EmployeeWages();
?>
