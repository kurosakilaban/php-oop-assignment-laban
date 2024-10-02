<?php
#Abstract classes are used when you want to define common functionality for derived classes, but you do not want to allow instances of the abstract class itself.

// Abstract class example
abstract class Vehicle {
    protected $make;
    protected $model;

    // Constructor
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Abstract method that must be implemented in child classes
    abstract public function getFuelType();

    // A concrete method that can be used by child classes
    public function getDetails() {
        return "Vehicle: $this->make $this->model";
    }
}

// Child class inheriting from Vehicle and implementing the abstract method
class Car extends Vehicle {
    public function getFuelType(): string {
        return "Petrol";
    }
}

// Another child class with a different implementation
class ElectricCar extends Vehicle {
    public function getFuelType(): string {
        return "Electric";
    }
}

// Create objects of the child classes
$myCar = new Car(make: "Toyota", model: "Corolla");
echo $myCar->getDetails() . " uses " . $myCar->getFuelType() . " fuel.\n";

$myElectricCar = new ElectricCar(make: "Tesla", model: "Model S");
echo $myElectricCar->getDetails() . " uses " . $myElectricCar->getFuelType() . " fuel.\n";

#This example demonstrates how different vehicles have different fuel types, and the abstract class ensures every derived class must specify the getFuelType method.

