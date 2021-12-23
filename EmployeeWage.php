<?php
class EmployeeWages{
    private $wagePerHour = 20;
    private $fullDayHour = 8;
    private $halfDayHour = 5;
    private $wagesformonth = 20;

    //checking employee is present or not
    function UcOne(){
        $this->randomValue = rand(0,2);
        if($this->randomValue == 1){
            echo "Employee is present for full day\n";
            return $this->randomValue;
        }
        elseif($this->randomValue == 2){
            echo "Employee is present for half day\n";
            return $this->randomValue;
        }else{
            echo "Employee is absent\n";
            return $this->randomValue;
        }
    }

    //checking employee status and calculating wages
    function UcTwo(){
        $oneDayWage = 0;
        //calling method to check employee status
        $employeeIsPresent = $this->UcOne(); 
        if($employeeIsPresent == 1){
            $oneDayWage = $this->wagePerHour * $this->fullDayHour;
            echo "Total Wage of the Day is :- ".$oneDayWage; 
        }else{
            echo "Total Wage of the day is :- $oneDayWage";
        }
    }

    //checking employee status and calculating employee wages for month
    function UcFive(){
        $oneDayWage = 0;
        //calling method to check employee status
        $employeeIs = $this->UcOne();
        switch($employeeIs){
            case 1:
                //calculating wages
                $oneDayWage = $this->wagePerHour * $this->fullDayHour * $this->wagesformonth;
                echo "Total Wage for the month is :- ".$oneDayWage;
                break; 
            case 2:
                $oneDayWage = $this->wagePerHour * $this->halfDayHour * $this->wagesformonth;
                echo "Total Wage for the month is :- ".$oneDayWage;
                break;
            default:
                echo "Total Wage for the month is :- $oneDayWage";
        }
    }
}
$employeewage = new EmployeeWages();
$employeewage->UcFive();
?>
