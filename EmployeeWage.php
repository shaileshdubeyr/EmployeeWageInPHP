<?php
class EmployeeWages{
    private $wagePerHour = 20;
    private $fullDayHour = 8;
    private $halfDayHour = 5;

    function UcOne(){
        $this->randomValue = rand(0,2);
        if($this->randomValue == 1){
            echo "Employee is present\n";
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
   public function UcFour(){
        $oneDayWage = 0;
        $employeeIs = $this->UcOne();
        switch($employeeIs){
            case 1:
                $oneDayWage = $this->wagePerHour * $this->fullDayHour;
                echo "Total Wage of the Day is :- ".$oneDayWage;
                break; 
            case 2:
                $oneDayWage = $this->wagePerHour * $this->halfDayHour;
                echo "Total Wage of the Day is :- ".$oneDayWage;
                break;
            default:
                echo "Total Wage of the day is :- $oneDayWage";
        }
    }
}
$employeewage = new EmployeeWages();
$employeewage->UcFour();
?>