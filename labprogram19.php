<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Christ Academy Institute for Advanced Studies</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            color: white;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        section {
            margin-top: 20px;
        }
        footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Christ Academy Institute for Advanced Studies</h1>
    </header>
    
    <nav>
        <a href="#">Home</a>
        <a href="#">Courses</a>
        <a href="#">Admissions</a>
        <a href="#">Contact</a>
    </nav>
    
    <section>
        <h2>About Us</h2>
        <p>Welcome to Christ Academy Institute for Advanced Studies. We are dedicated to providing advanced education...</p>
    </section>
    
    <section>
        <h2>Our Courses</h2>
        <h3>Undergraduate (UG) Courses</h3>
        <ul>
            <?php
            $ugCourses = [
                "Bachelor of Computer Applications (BCA)",
                "Bachelor of Business Administration (BBA)",
                "Bachelor of Science (BSc) in Information Technology"
            ];

            foreach ($ugCourses as $course) {
                echo "<li>$course</li>";
            }
            ?>
        </ul>
        
        <h3>Postgraduate (PG) Courses</h3>
        <ul>
            <?php
            $pgCourses = [
                "Master of Computer Applications (MCA)",
                "Master of Business Administration (MBA)",
                "Master of Science (MSc) in Computer Science"
            ];

            foreach ($pgCourses as $course) {
                echo "<li>$course</li>";
            }
            ?>
        </ul>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Christ Academy Institute for Advanced Studies. All Rights Reserved.</p>
    </footer>
</body>
</html>
