<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color Based on Day of the Week</title>
</head>
<body>
    <?php
    $dayOfWeek = date('w');
    $colors=[
        'purple',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'white'
    ];
    
    if ($dayOfWeek == 0) {
        $backgroundColor = $colors[0]; // Sunday
    } else if ($dayOfWeek == 1) {
        $backgroundColor = $colors[1]; // Monday
    } else if ($dayOfWeek == 2) {
        $backgroundColor = $colors[2]; // Tuesday
    } else if ($dayOfWeek == 3) {
        $backgroundColor = $colors[3]; // Wednesday
    } else if ($dayOfWeek == 4) {
        $backgroundColor = $colors[4]; // Thursday
    } else if ($dayOfWeek == 5) {
        $backgroundColor = $colors[5]; // Friday
    } else if ($dayOfWeek == 6) {
        $backgroundColor = $colors[6]; // Saturday
    }
    ?>

    <div style="width: 100%; height: 100vh; background-color: <?php echo $backgroundColor; ?>;">
        <h1 style="text-align: center; padding-top: 40vh; color: #ffffff;">Today is <?php echo date('l'); ?></h1>
    </div>
</body>
</html>
