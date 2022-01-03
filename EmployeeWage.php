<?php
class EmployeeWages
{
    /**
     * creating properties of the class
     */
    private $company;
    private $empWagePerHour;
    private $workingHour;
    private $workDaysPerMonth;
    private $workingHours;
    /**
     * passing three argument to the function
     * no return type
     * checking employee wage for month day
     */
    function __construct($empWagePerHour, $workDaysPerMonth, $workingHour, $company)
    {
        $this->empWagePerHour = $empWagePerHour;
        $this->workDaysPerMonth = $workDaysPerMonth;
        $this->workingHour = $workingHour;
        $this->company = $company;
    }
    private function employeeWagesForTheMonth()
    {
        $hour = 0;
        $workDayPerMonth = 0;
        /**
         * checking for the day and hour
         */
        while ($workDayPerMonth != $this->workDaysPerMonth && $hour <= $this->workingHour) {
            $randomValue = rand(0, 2);
            $workDayPerMonth++;
            switch ($randomValue) {
                case 1:
                    echo "Employee is present for full day\n";
                    $this->workingHours = 8;
                    break;
                case 2:
                    echo "Employee is present for half Day\n";
                    $this->workingHours = 5;
                    break;
            }
            $hour += $this->workingHours;
        }
        //calculating total wage of employee
        $totalWageIs = $this->empWagePerHour * $hour * $workDayPerMonth;
        echo "total wage of $this->company for one month is $totalWageIs";
    }
    function __destruct()
    {
        $this->employeeWagesForTheMonth();
    }
}
/**
 * creating object of the class
 */
$dmart = new EmployeeWages(readline("enter the wage per hour :- "),
                           readline("working day per month :- "),
                           readline("Enter total Working hours :- "),
                           "Dmart");
