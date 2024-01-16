<?php
$dbHost="localhost";
$dbUsername="root";
$dbpassword="";
$dbname="image_storage";
$db=new mysqli($dbHost,$dbUsername,$dbpassword,$dbname);
if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder='uploads/'.$file_name;
    $query=mysqli_query($db,"Insert into imagestorage(image) values('$file_name')");
    move_uploaded_file($tempname,$folder);
    if($query){
        echo "<h2>File uploaded </h2>";
    }
    else{
        echo "<h2>Failed...</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="submit">Upload</button>
    </form>
    <div class="images">
    <?php
       $res=mysqli_query($db,"select * from imagestorage");
       while($row = mysqli_fetch_assoc($res)){
        ?>
     <img src="uploads/<?php echo $row['Image']?>" width="200px"/>
     <?php } ?>   
       </div>
</body>
</html>