<?php
class EmployeeWages{
    /**
     * creating properties of the class
     */
    const WAGEPERHOUR = 20;
    private $workingHours;
    private $workDayPerMonth = 0;
    /**
     * no argument passing to the function
     * no return type
     * checking employee wage for one day
     */
    public function employeeWagesForTheMonth(){
        $day = 0; $hour = 0;
        /**
         * checking for the day and hour
         */
        while($this->workDayPerMonth !=20 && $hour <= 100){
            $randomValue = rand(0,2);
            $this->workDayPerMonth++;
            switch($randomValue){
                case 1:
                    echo "Employee is present for full day\n";
                    $this->workingHours = 8;
                    $hour += $this->workingHours;
                    break;
                case 2:
                    echo "Employee is present for half Day\n";
                    $this->workingHours = 5;
                    $hour += $this->workingHours;
                    break;
                default :
                    $this->workingHours = 0;
                    break;
            }
        }
        //printing the day and hour
        echo "the day is ".$this->workDayPerMonth." The hour is ".$hour."\n";
        /**
         * calculating total wage of employee
         */
        $totalWageIs = self::WAGEPERHOUR * $hour * $this->workDayPerMonth;
        echo "total wage of employee for one month is $totalWageIs";  
    }
}
/**
 * creating object of the class
 */
$employeewage = new EmployeeWages();
/**
 * calling methods of the class
 */
$employeewage->employeeWagesForTheMonth();
