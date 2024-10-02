<?php

#Traits allow you to reuse sets of methods across multiple classes without needing inheritance. This is especially useful for adding functionality to unrelated classes.

// Define a trait for logging messages
trait Logger {
    public function logInfo($message) {
        echo "[INFO]: $message\n";
    }

    public function logError($message) {
        echo "[ERROR]: $message\n";
    }
}

// Class that uses the Logger trait
class User {
    use Logger;

    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function login() {
        $this->logInfo("User $this->username logged in.");
    }

    public function logout() {
        $this->logInfo("User $this->username logged out.");
    }
}

// Another class that uses the Logger trait
class FileManager {
    use Logger;

    public function openFile($filename) {
        $this->logInfo("Opened file $filename.");
    }

    public function closeFile($filename) {
        $this->logInfo("Closed file $filename.");
    }
}

// Create instances and use the trait's methods
$user = new User("Laban");
$user->login();
$user->logout();

$fileManager = new FileManager();
$fileManager->openFile("document.txt");
$fileManager->closeFile("document.txt");

#The Logger trait can be used across any class that needs logging functionality, saving code duplication.

