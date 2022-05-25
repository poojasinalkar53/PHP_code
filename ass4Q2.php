<?php
//Super Parent Class Emp havening properties code,name & Designation of a Employ 
class emp {
public $code=0;
public $name='';
public $des='';
public function __construct($code,$name,$des)
{
$this->code=$code;
$this->name=$name;
$this->des=$des;
}
}
// this class extending emp class & having properties Account Number & Joining Date of a employee
class emp_account extends emp
{
public $acct_no=0;
public $joining_date='';
public function __construct($code,$name,$des,$acct_no,$joining_date)
{
parent::__construct($code,$name,$des);
$this->acct_no=$acct_no;
$this->joining_date=$joining_date;
}
}
//this class extending emp_account & having properties basic_pay,earnings & deduction
class emp_sal extends emp_account
{
public $basic_pay=0;
public $earnings=0;
public $deduction=0;
public function
__construct($code,$name,$des,$acct_no,$joining_date,$basic_pay,$earnings,$deduction)
{
parent::__construct($code,$name,$des,$acct_no,$joining_date);
$this->basic_pay=$basic_pay;
$this->earnings=$earnings;
$this->deduction=$deduction;
}
public function display()
{
echo "\nEmp Code: ".$this->code;
echo "\nEmp Name: ".$this->name; 
echo "\nEmp Designation: ".$this->des; 
echo "\nEmp Account No.: ".$this->acct_no; 
echo "\nEmp Joining Date: ".$this->joining_date; 
echo "\nEmp Basic Pay: ".$this->basic_pay; 
echo "\nEmp Total Earning: ".$this->earnings; 
echo "\nEmp Total Deduction: ".$this->deduction."\n"; 
}
}
//Creating an array of Employ
$emp=Array();
$emp[0]=new emp_sal(156,"kavita","python developer",1234,"22/04/2020",2200,35000,1000);
$emp[1]=new emp_sal(157,"Sairaj"," Jr. Software Eng.",3211,"23/4/2020",2550,55000,1200);
$emp[2]=new emp_sal(158,"Rinna"," DBA.",4211,"28/4/2020",2350,85000,1000);
//Printing a Master Table
echo "Master Table: ";
echo "\nCode Name Designation Account_no Joining Date Basic Pay Earnings Deduction\n";
for($i=0;$i<sizeof($emp);$i++)
{
echo "\n".$emp[$i]->code." ".$emp[$i]->name." ".$emp[$i]->des." ".$emp[$i]->acct_no." ".$emp[$i]->joining_date." ".$emp[$i]->basic_pay." ".$emp[$i]->earnings." ".$emp[$i]->deduction;
}
//To Sort the Emp data based on their ID
function comparator($object1, $object2) {
return ($object1->code < $object2->code)?-1:1;
}
usort($emp, 'comparator'); //To sort an array of objects
echo "\n\nData of Employees after sorting: \n";
for($i=0;$i<sizeof($emp);$i++)
{
$emp[$i]->display();
}
//Searching for a Employ using Code
echo "\nEnter The ID for which you want to Search:\n";
$key=readline();
$temp=0;
for($i=0;$i<sizeof($emp);$i++)
{
if($key==$emp[$i]->code)
{
echo "\nEmp Exist";
$temp++;
break;
}
}
if($temp==0)
{
echo "Emp not Found";
}
//Displaying The Salaries of a Employ
echo "\nDisplaying The Salaries of Emp.\n";
echo "Emp-ID Salary";
for($i=0;$i<sizeof($emp);$i++)
{
echo "\n ".$emp[$i]->code." ".($emp[$i]->earnings)-($emp[$i]->deduction);
}
?>