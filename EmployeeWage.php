<?php
class EmployeeWages{
    private $wagePerHour = 20;
    private $fullDayHour = 8;

    function UcOne(){
        $this->randomValue = rand(0,1);
        if($this->randomValue == 1){
            echo "Employee is present\n";
            return $this->randomValue;
        }else{
            echo "Employee is absent\n";
            return $this->randomValue;
        }
    }

    function UcTwo(){
        $oneDayWage = 0;
        $employeeIsPresent = $this->UcOne();
        if($employeeIsPresent == 1){
            $oneDayWage = $this->wagePerHour * $this->fullDayHour;
            echo "Total Wage of the Day is :- ".$oneDayWage; 
        }else{
            echo "Total Wage of the day is :- $oneDayWage";
        }
    }
}
$employeewage = new EmployeeWages();
$employeewage->UcOne()
?>