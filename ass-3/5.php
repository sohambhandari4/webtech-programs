<?php
$stack = array();
function insertElement(&$stack, $element) {
    array_push($stack, $element);
}
function deleteElement(&$stack) {
    if (!empty($stack)) 
    {
        array_pop($stack);
        echo "Element deleted from the stack.\n";
    } else {
        echo "Stack is empty. Cannot delete element.\n";
    }
}
function displayStack($stack) {
    if (!empty($stack)) 
    {
        echo "Stack contents:\n";
        foreach ($stack as $element) 
        {
            echo "$element\n";
        }
    } else
     {
        echo "Stack is empty.\n";
    }
}
while (true) {
    echo "\nMenu:\n";
    echo "a) Insert an element into the stack\n";
    echo "b) Delete an element from the stack\n";
    echo "c) Display the contents of the stack\n";
    echo "d) Exit\n";
    echo "Enter your choice: ";
    $choice = readline();
    switch ($choice) {
        case 'a':
            echo "Enter element to insert: ";
            $element = readline();
            insertElement($stack, $element);
            break;
        case 'b':
            deleteElement($stack);
            break;
        case 'c':
            displayStack($stack);
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
