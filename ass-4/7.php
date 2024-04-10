<?php

// Define the QueueInterface
interface QueueInterface {
    // Method to add an element to the queue
    public function enqueue($element);

    // Method to remove and return the front element from the queue
    public function dequeue();

    // Method to check if the queue is empty
    public function isEmpty();

    // Method to get the size of the queue
    public function size();
}

// Implement the QueueInterface in a class
class Queue implements QueueInterface {
    // Internal storage for the queue elements
    private $elements;

    // Constructor to initialize the queue
    public function __construct() {
        $this->elements = array();
    }

    // Method to add an element to the queue
    public function enqueue($element) {
        $this->elements[] = $element;
    }

    // Method to remove and return the front element from the queue
    public function dequeue() {
        if ($this->isEmpty()) {
            return null; // Queue is empty
        } else {
            return array_shift($this->elements); // Remove and return the front element
        }
    }

    // Method to check if the queue is empty
    public function isEmpty() {
        return empty($this->elements);
    }

    // Method to get the size of the queue
    public function size() {
        return count($this->elements);
    }
}

// Test the Queue class
$queue = new Queue();

// Enqueue elements
$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

// Dequeue elements and display them
echo "Dequeued elements:\n";
echo $queue->dequeue() . "\n"; // Output: 10
echo $queue->dequeue() . "\n"; // Output: 20

// Check if the queue is empty
echo "Is queue empty? " . ($queue->isEmpty() ? "Yes" : "No") . "\n"; // Output: No

// Get the size of the queue
echo "Size of queue: " . $queue->size() . "\n"; // Output: 1

?>
