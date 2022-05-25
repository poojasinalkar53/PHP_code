<?php
//Class Account having two properties account number & Customer name
class Account{
public $act_no=0;
public $cust_name='';
public function __construct($act_no,$name)
{
$this->act_no=$act_no;
$this->cust_name=$name;
}
}
//class Saving Account extending class Account having properties balance & Minimum balance 
class Saving_acct extends Account
{
public $balance=0;
public $min_amount=0;
public function __construct($act,$name,$balance,$min_amount)
{
parent::__construct($act,$name); // passing data to parent class Account
$this->balance=$balance;
$this->min_amount=$min_amount;
}
}
//class Current Account extending class Account having properties balance & Minimum balance 
class current_acct extends Account
{ 
public $balance=0;
public $min_amount=0;
public function __construct($act,$name,$balance,$min_amount)
{
parent::__construct($act,$name); // passing data to parent class Account
$this->balance=$balance;
$this->min_amount=$min_amount;
}
}
$emp=Array();
//creating Saving Account
$emp[0]=new Saving_acct(111,"Shivanya",6000,500);
//creating Current Account
$emp[1]=new current_acct(121,"Kavya",7000,700);
//Displaying details of account holder
for($i=0;$i<sizeof($emp);$i++)
{
echo "\nAccount No: ".($emp[$i]->act_no);
echo "\nHolder's Name: ".($emp[$i]->cust_name);
echo "\nBalance: ".($emp[$i]->balance);
echo "\nMin. Balance: ".($emp[$i]->min_amount);
}
//Accepting the account number from user in which amount to be deposit
echo "\nEnter The account Number In which Do you want to Deposit:\n";
$acct=(int)readline();
$flag=true;
//To check that account number is exist or not
for($i=0;$i<sizeof($emp);$i++)
{
if($acct==$emp[$i]->act_no) 
{
Deposit($emp[$i]);
$flag=false;
}
}
if($flag)
{
echo "\nSorry... Account Not found\n";
}
//Function To Deposit the amount
function Deposit($acct)
{
echo "Enter The amount to be deposit: \n";
$amt=(int)readline();
$acct->balance+=$amt;
echo "Amount Deposited Successfully";
echo "\nYour Current Balance is: ".$acct->balance;
}
//Accepting the account number for which your wants to Withdraw
echo "\nEnter The account Number In which Do you want to Withdraw:\n";
$acct=(int)readline();
//Function to Withdraw amount from account
function Withdraw($acct)
{
echo "Enter The amount to be Withdraw: \n";
$amt=(int)readline();
$temp=($acct->balance)-$amt;
if($temp>=$acct->min_amount) //checks whether user has sufficient balance or not
{
$acct->balance=$temp;
echo "Amount Withdraw Successfully";
echo "\nYour Current Balance is: ".$acct->balance;
}
else
{
echo "\nSorry... Not Sufficient Balance in your account";
}
}
//Search whether account exist or not
$flag=true;
for($i=0;$i<sizeof($emp);$i++)
{
if($acct==$emp[$i]->act_no)
{
Withdraw($emp[$i]);
$flag=false;
}
}
if($flag)
{
echo "\nSorry... Account Not found\n";
}
?>