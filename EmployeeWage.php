<?php
include "C:/xampp/htdocs/PHPProjects/EmployeeWage/CompanyMethod.php";

class EmployeeWages implements WageCalculator {
    /**
     * creating properties of the class
     */
    private $company;
    private $empWagePerHour;
    private $workingHour;
    private $workDaysPerMonth;
    private $workingHours;
    private $totalWageIs;
    //insilizing the class variable
    function __construct($company, $empWagePerHour, $workDaysPerMonth, $workingHour)
    {
        $this->empWagePerHour = $empWagePerHour;
        $this->workDaysPerMonth = $workDaysPerMonth;
        $this->workingHour = $workingHour;
        $this->company = $company;
        $this->employeeWagesForTheMonth();
    }
      /**
     * passing three argument to the function
     * no return type
     * checking employee wage for month day
     */
     function employeeWagesForTheMonth()
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
                    echo "Employee is present for full Day\n";
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
        $this->totalWageIs = $this->empWagePerHour * $hour * $workDayPerMonth;
        echo "total wage of $this->company for one month is $this->totalWageIs\n";
    }
}

$employeeWageBuilder = [];
$loop = true;
while ($loop) {
    $loop = readline("Do you want to add new company wages then type 'y' or enter any key to exit: - ");
    if ($loop == 'y') {
        //creating object of the class
        $companyObj = new EmployeeWages(
            readline("enter the  Company Name :- "),
            readline("enter the wage per hour :- "),
            readline("working day per month :- "),
            readline("Enter total Working hours :- ")
        );
        $companykey = readline("Ente the key");
        $employeeWageBuilder[$companykey] = $companyObj;
    } else {
        $loop = false;
    }
}
//printing each object
print_r($employeeWageBuilder);
