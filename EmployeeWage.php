<?php
class EmployeeWages{
<<<<<<< HEAD
    
    function __construct()
    {
        echo "Welcome to the Employee Wage";
=======
    /**
     * creating properties of the class
     */
    private $wageperHour;
    private $WorkingHours = 8;
    /**
     * no argument passing to the function
     * no return type
     * checking employee wage for one day
     */
    public function employeeWagesForTheday(){
        /**
         * generating random value to check status of employee
         */
        $randomValue = rand(0,1);
        if($randomValue == 1){
            echo "Employee is present\n";
            $this->wageperHour = 20;
        }else{
            echo "Employee is Absent\n";
            $this->wageperHour = 0;
        }
        /**
         * calculating total wage of employee
         */
        $totalWageIs = $this->wageperHour * $this->WorkingHours;
        echo "total wage of employee for one day is $totalWageIs";
>>>>>>> UcTwo
    }
}
/**
 * creating object of the class
 */
$employeewage = new EmployeeWages();
<<<<<<< HEAD
=======
/**
 * calling methods of the class
 */
$employeewage->employeeWagesForTheday();
>>>>>>> UcTwo
?>
