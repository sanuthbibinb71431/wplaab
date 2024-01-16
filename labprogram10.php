<?php
function removeDuplicates($sortedList) {
    return array_unique($sortedList);
}

$sortedList = [1, 2, 2, 3, 4, 4, 4, 5, 5, 6, 7, 7, 8, 9, 9];

$uniqueList = removeDuplicates($sortedList);

echo "Original sorted list: " . implode(', ', $sortedList) . "<br>";
echo "List after removing duplicates: " . implode(', ', $uniqueList);
?>
