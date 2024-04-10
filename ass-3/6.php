<?php

// Initialize an empty queue
$queue = array();

// Function to insert an element into the queue
function insertElement(&$queue, $element) {
    array_push($queue, $element);
}

// Function to delete an element from the queue
function deleteElement(&$queue) {
    if (!empty($queue)) {
        array_shift($queue);
        echo "Element deleted from the queue.\n";
    } else {
        echo "Queue is empty. Cannot delete element.\n";
    }
}

// Function to display the contents of the queue
function displayQueue($queue) {
    if (!empty($queue)) {
        echo "Queue contents:\n";
        foreach ($queue as $element) {
            echo "$element\n";
        }
    } else {
        echo "Queue is empty.\n";
    }
}

// Menu-driven program
while (true) {
    echo "\nMenu:\n";
    echo "a) Insert an element into the queue\n";
    echo "b) Delete an element from the queue\n";
    echo "c) Display the contents of the queue\n";
    echo "d) Exit\n";
    echo "Enter your choice: ";

    // Get user input
    $choice = readline();

    switch ($choice) {
        case 'a':
            echo "Enter element to insert: ";
            $element = readline();
            insertElement($queue, $element);
            break;
        case 'b':
            deleteElement($queue);
            break;
        case 'c':
            displayQueue($queue);
            break;
        case 'd':
            echo "Exiting program.\n";
            exit();
        default:
            echo "Invalid choice. Please enter a valid option.\n";
            break;
    }
}
?>
