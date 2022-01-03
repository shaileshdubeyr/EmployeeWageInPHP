<?php
class EmployeeWages
{
    /**
     * creating properties of the class
     */
    private $workingHours;
    /**
     * passing three argument to the function
     * no return type
     * checking employee wage for month day
     */
    private function employeeWagesForTheMonth($wageperHour,$workingHour,$workDayPerMonth,$cpmpanyName)
    {
        $hour = 0;
        /**
         * checking for the day and hour
         */
        while ($workDayPerMonth != 20 && $workingHour <= 100) {
            $randomValue = rand(0, 2);
            $this->workDayPerMonth++;
            switch ($randomValue) {
                case 1:
                    echo "Employee is present for full day\n";
                    $this->workingHours = 8;
                    $workingHour += $this->workingHours;
                    break;
                case 2:
                    echo "Employee is present for half Day\n";
                    $this->workingHours = 5;
                    $workingHour += $this->workingHours;
                    break;
                default:
                    $this->workingHours = 0;
                    break;
            }
        }
        //printing the day and hour
        echo " The company is $cpmpanyName the working day is " . $this->workDayPerMonth . " The hour is " . $workingHour . "\n";
        //calculating total wage of employee
        $totalWageIs = $wageperHour * $workingHour * $workDayPerMonth;
        echo "total wage of employee for one month is $totalWageIs";
    }

     function eachCompanyInput()
    {
        //Taking user input
        $compnyName = readline("the name of the company is :- ");
        $wagePerHour= readline("enter the wage per hour :- ");
        $totalWorkingHours = readline("Enter the working hours :-  ");
        $workDayPerMonth = readline("enter the work day for a month :- ");
        //passing paramerter to calculate employee wage
        $this->employeeWagesForTheMonth($wagePerHour,$totalWorkingHours,$workDayPerMonth,$compnyName);
    }
}
/**
 * creating object of the class
 */
$employeewage = new EmployeeWages();
/**
 * calling methods of the class
 */
$employeewage->eachCompanyInput();
