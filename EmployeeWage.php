<?php
class EmployeeWages{
    /**
     * creating properties of the class
     */
    private $wageperHour = 20;
    private $workingHours;
    /**
     * no argument passing to the function
     * no return type
     * checking employee wage for one day
     */
    public function employeeWagesForTheDay(){
        /**
         * generating random value to check status of employee
         */

        $randomValue = rand(0,2);
        if($randomValue == 1){
            echo "Employee is present\n";
            $this->workingHours = 8;
        }elseif($randomValue == 2){
            echo "Employee is present for half Day\n";
            $this->workingHours = 5;
        }else{
            echo "Employee is Absent\n";
            $this->workingHours = 0;
        }
        /**
         * calculating total wage of employee
         */
        $totalWageIs = $this->wageperHour * $this->workingHours;
        echo "total wage of employee for one day is $totalWageIs";
    }
}
/**
 * creating object of the class
 */
$employeewage = new EmployeeWages();
/**
 * calling methods of the class
 */
$employeewage->employeeWagesForTheday();
?>
