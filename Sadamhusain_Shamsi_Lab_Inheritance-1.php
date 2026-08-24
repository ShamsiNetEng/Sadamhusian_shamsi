<?php
// Student Name: Sadamhusain Shamsi
// Student ID / Roll Number: 18

// Task 1: Access Modifiers

class StudentAccount
{
    public $name;
    private $studentId;
    protected $department;

    function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }

    function getStudentId()
    {
        return $this->studentId;
    }
}

$student1 = new StudentAccount("Ahmad", 1001, "Computer Science");
$student1->showInfo();
echo "Student ID from method: " . $student1->getStudentId();

echo "<hr>";


// Task 2: Simple Inheritance

class Person
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}

class Student extends Person
{
    function study()
    {
        echo $this->name . " is studying.";
    }
}

$student2 = new Student("Sara");
$student2->introduce();
$student2->study();

echo "<hr>";


// Task 3: combine inheritance and access modifier

class Employee
{
    public $company;
    protected $name;
    private $salary;

    function __construct($name, $company, $salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

    function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee
{
    function manageTeam()
    {
        echo $this->name . " is managing the team.";
    }
}

$manager1 = new Manager("Ali", "Kabul Tech", 30000);

$manager1->showEmployee();
echo "Salary from method: " . $manager1->getSalary() . "<br>";
$manager1->manageTeam();





//  short questions;
// 1. what does public mean?
// public, the property or method can be  accessed from inside or outside the class.
// 2. what does private mean?
// private, the property or method can be accessed from inside of that class and does not be accessible from outside the class.
// 3. what does protected mean?
// protected, property or method can be accessed inside the same class and by child classes that inherit from it, but it cannot be accessed directly from outside the claasss.
// 4. what is the purpose of extends?
// extends, one class inherits features from another class.
// 5. which class is called the parent class?
// a class that gives its properties and methods to another class is called the parent class.
// 6. which class is called the child class?
// a class that inherits properties and methods from another class is called the child class.
// 7. why is protected useful in inheritance?
// protected is useful because it allows child classes to access parent class properties and methods, while keeping them hidden from outside access.






?>
