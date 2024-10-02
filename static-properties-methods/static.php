<?php

#Static properties and methods belong to the class itself rather than to instances of the class. They are shared among all instances.

class DatabaseConnection {
    private static $instance; // Static property to hold the singleton instance

    private function __construct() {
        // Private constructor to prevent direct object creation
        echo "New database connection created.\n";
    }

    public static function getInstance() {
        // If no instance exists, create one
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query($sql) {
        echo "Executing query: $sql\n";
    }
}

// Usage
$db1 = DatabaseConnection::getInstance();
$db1->query("SELECT * FROM users");

$db2 = DatabaseConnection::getInstance();
$db2->query("SELECT * FROM orders");

#This example demonstrates a Singleton pattern where only one instance of DatabaseConnection is ever created, using static methods and properties.

 