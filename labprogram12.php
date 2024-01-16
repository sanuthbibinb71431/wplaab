<?php
$users = [
    ['id' => 1, 'name' => 'John', 'age' => 25, 'city' => 'New York'],
    ['id' => 2, 'name' => 'Alice', 'age' => 30, 'city' => 'San Francisco'],
    ['id' => 3, 'name' => 'Bob', 'age' => 28, 'city' => 'Los Angeles'],
    ['id' => 4, 'name' => 'Eve', 'age' => 22, 'city' => 'Chicago'],
];

$criteria = 'city';
$searchValue = 'New York';

$results = array_filter($users, function ($user) use ($criteria, $searchValue) {
    return $user[$criteria] === $searchValue;
});

if (!empty($results)) {
    echo "Search results for $criteria: $searchValue <br>";
    foreach ($results as $result) {
        echo "ID: " . $result['id'] . ", Name: " . $result['name'] . ", Age: " . $result['age'] . ", City: " . $result['city'] . "<br>";
    }
} else {
    echo "No results found for $criteria: $searchValue";
}
?>
