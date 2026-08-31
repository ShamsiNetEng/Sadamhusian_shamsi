<?php
// Name: Sadamhusain Shamsi
// Student ID: 18


// Task 1: Create and Use a Class Constant

class Library {

    const MAX_BOOKS = 3;

}

// This value is constant because maximum allowed books should remain fixed.
echo "Maximum books allowed: " . Library::MAX_BOOKS;


echo "<br><br>";


// Task 2: Create a Static Property and Static Method

class StudentCounter {

    public static $count = 0;


    public static function addStudent() {

        self::$count++;

    }

}


StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();


echo "Total students: " . StudentCounter::$count;


echo "<br><br>";


// Task 3: Create an Abstract Class and Abstract Method

abstract class Vehicle {

    abstract public function start();

}


class Car extends Vehicle {


    public function start() {

        echo "Car engine started.";

    }

}


class Bike extends Vehicle {


    public function start() {

        echo "Bike started.";

    }

}


// Create objects

$car = new Car();

$bike = new Bike();


// Call methods

$car->start();

echo "<br>";

$bike->start();


?>
