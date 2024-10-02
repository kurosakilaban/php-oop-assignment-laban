<?php

#Interfaces define a contract that a class must follow, ensuring consistency in method signatures without providing implementation.

// Define a Drivable interface
interface Drivable {
    public function startEngine();
    public function stopEngine();
    public function accelerate($speed);
}

// Class implementing the Drivable interface
class Car implements Drivable {
    public function startEngine() {
        return "Car engine started.\n";
    }

    public function stopEngine() {
        return "Car engine stopped.\n";
    }

    public function accelerate($speed) {
        return "The car is accelerating to $speed km/h.\n";
    }
}

// Another class implementing the same interface
class Bike implements Drivable {
    private $brand;
    private $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function startEngine() {
        return "Bike engine started.\n";
    }

    public function stopEngine() {
        return "Bike engine stopped.\n";
    }

    public function accelerate($speed) {
        return "The bike is accelerating to $speed km/h.\n";
    }
}

// Create and use the objects
$myCar = new Car("Toyota", "Corolla");
echo $myCar->startEngine();
echo $myCar->accelerate(100);

$myBike = new Bike("Honda", "Civic");
echo $myBike->startEngine();
echo $myBike->accelerate(60);

#In this example, both Car and Bike implement the same Drivable interface but can have different ways of functioning internally.

