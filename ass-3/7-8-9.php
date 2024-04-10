<?php
// Sample associative arrays
$array1 = array("a" => 1, "b" => 2, "c" => 3);
$array2 = array("b" => 2, "c" => 3, "d" => 4);
// Function to merge given arrays
function mergeArrays($array1, $array2) {
    return array_merge($array1, $array2);
}
// Function to find the intersection of two arrays
function intersectionArrays($array1, $array2) {
    return array_intersect_assoc($array1, $array2);
}
// Function to find the union of two arrays
function unionArrays($array1, $array2) {
    return array_unique(array_merge($array1, $array2), SORT_REGULAR);
}
// Function to find set difference of two arrays
function differenceArrays($array1, $array2) {
    return array_diff_assoc($array1, $array2);
}
// Function to sort the array by values (changing the keys) in ascending or descending order
function sortArrayByValues($array, $ascending = true) {
    if ($ascending) {
        asort($array);
    } else {
        arsort($array);
    }
    return $array;
}
// Function to sort the array by values without changing the keys
function sortArrayValuesKeepKeys($array, $ascending = true) {
    if ($ascending) {
        asort($array);
    } else {
        arsort($array);
    }
    return $array;
}
// Function to filter odd elements from an array
function filterOddElements($array) {
    return array_filter($array, function ($value) {
        return $value % 2 !== 0;
    });
}
// Function to sort different arrays at a glance using a single function
function sortArraysAtGlance($arrays, $ascending = true) {
    foreach ($arrays as &$array) {
        $array = sortArrayByValues($array, $ascending);
    }
    return $arrays;
}
// Menu-driven program
while (true) {
    echo "\nMenu:\n";
    echo "a) Merge the given arrays\n";
    echo "b) Find the intersection of two arrays\n";
    echo "c) Find the union of two arrays\n";
    echo "d) Find set difference of two arrays\n";
    echo "e) Sort the array by values (changing the keys) in ascending or descending order\n";
    echo "f) Sort the array by values without changing the keys\n";
    echo "g) Filter the odd elements from an array\n";
    echo "h) Sort the different arrays at a glance using a single function\n";
    echo "i) Exit\n";
    echo "Enter your choice: ";
    // Get user input
    $choice = readline();

    switch ($choice) {
        case 'a':
            print_r(mergeArrays($array1, $array2));
            break;
        case 'b':
            print_r(intersectionArrays($array1, $array2));
            break;
        case 'c':
            print_r(unionArrays($array1, $array2));
            break;
        case 'd':
            print_r(differenceArrays($array1, $array2));
            break;
        case 'e':
            echo "Sort by values in ascending or descending order (a/d): ";
            $order = readline();
            print_r(sortArrayByValues($array1, $order === 'a'));
            break;
        case 'f':
            echo "Sort by values without changing keys in ascending or descending order (a/d): ";
            $order = readline();
            print_r(sortArrayValuesKeepKeys($array1, $order === 'a'));
            break;
        case 'g':
            print_r(filterOddElements($array1));
            break;
        case 'h':
            print_r(sortArraysAtGlance([$array1, $array2]));
            break;
        case 'i':
            echo "Exiting program.\n";
            exit();
        default:
            echo "Invalid choice. Please enter a valid option.\n";
            break;
    }
}
?>

