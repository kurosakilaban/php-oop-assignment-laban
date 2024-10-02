<?php

# Iterables in PHP are any value that can be looped over with foreach. They include arrays and objects that implement the Iterator interface.

class NumberGenerator implements Iterator {
    private $numbers;
    private $position = 0;

    public function __construct($start, $end) {
        $this->numbers = range(start: $start, end: $end);
    }

    public function current(): mixed {
        return $this->numbers[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->numbers[$this->position]);
    }
}

// Usage
$generator = new NumberGenerator(start: 1, end: 5);
foreach ($generator as $number) {
    echo "Generated number: " . strval(value: $number) . "\n";
}

#This example uses the Iterator interface to create a custom class that generates numbers in a given range, which can be iterated with a foreach loop.

