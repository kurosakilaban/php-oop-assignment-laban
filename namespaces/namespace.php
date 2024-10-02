<?php

// Declare a namespace
namespace MyApp\Utilities;

class Helper {
    public function greet($name): string {
        return "Hello, $name!\n";
    }
}

namespace MyApp\Models;
class User {
    public function getUsername(): string {
        return "Laban";
    }
}
use MyApp\Utilities\Helper;

$helper = new Helper();
echo $helper->greet(name: "Laban");

$user = new User();
echo "Username: " . $user->getUsername() . "\n";

#This shows how to declare and use namespaces to organize classes and avoid naming conflicts between different parts of the application.
