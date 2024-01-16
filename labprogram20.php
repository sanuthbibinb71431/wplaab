<!DOCTYPE html>
<html>
<head>
    <title>User Input</title>
</head>
<body>
    <form action="" method="post" name="divide">
        <label for="numerator">Numerator:</label>
        <input type="text" name="numerator" id="numerator" placeholder="10"/><br><br>
        <label for="denominator">Denominator:</label>
        <input type="text" name="denominator" id="denominator" placeholder="0"/><br><br>
        <label for="date">Enter date</label>
        <input type="text" name="date" id="date" placeholder="Y-m-d"><br><br>
        <input type="submit" value="Check" /><br><br>
    </form>
    <?php
    function divide($numerator, $denominator) {
        return $denominator == 0 ? "Division by zero error" : $numerator / $denominator;
    }

    function checkDateFormat($dateString) {
        return DateTime::createFromFormat('Y-m-d', $dateString) ? "Entered Date $dateString Is In Correct Format" : "Invalid date format. Expected format: YYYY-MM-DD";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerator = $_POST['numerator'];
        $denominator = $_POST['denominator'];
        $dateString = $_POST['date'];

        echo "Result Of Division: " . divide($numerator, $denominator) . "<br><br>";
        echo checkDateFormat($dateString) . "<br><br>";
    }
    ?>
</body>
</html>
