<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add a student
function addStudent($conn, $name, $age, $grade) {
    $sql = "INSERT INTO studentdbs (name, age, grade) VALUES ('$name', '$age', '$grade')";
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to update a student
function updateStudent($conn, $id, $name, $age, $grade) {
    $sql = "UPDATE studentdbs SET name='$name', age='$age', grade='$grade' WHERE Sno=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Function to delete a student
function deleteStudent($conn, $id) {
    $sql = "DELETE FROM studentdbs WHERE Sno=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

addStudent($conn, 'Alice', 20, 'A');

updateStudent($conn, 1, 'Alice Smith', 21, 'B');

deleteStudent($conn, 2);

$conn->close();
?>
