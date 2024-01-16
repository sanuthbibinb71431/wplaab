<!DOCTYPE html>
<html>
<head>
    <title>File Reader/Writer</title>
</head>
<body>
    <h2>File Reader/Writer</h2>
       
    <hr>
    
    <form action="" method="post">
        <label for="readFilename">Enter File Name to Read:</label>
        <input type="text" id="readFilename" name="readFilename" >
        <br><br>
        <input type="submit" value="Read File">
    <br><br>    
    </form>
    <form action="" method="POST">
    <label for="writeFilename">Enter File Name to write:</label>
        <input type="text" id="writeFilename" name="writeFilename"><br><br>
        <label for="writeFilename">Enter File Content:</label><br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="write File"> <br><br>   
    </form>
    <?php
function writeFile($filename, $content) {
    $file = fopen($filename, "a") or die("Unable to open file!");
    fwrite($file, $content);
    fclose($file);
}

function readFileContent($filename) {
    $file = fopen($filename, "r") or die("Unable to open file!");
    $content = fread($file, filesize($filename));
    fclose($file);
    echo $content;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['readFilename'])){
        $filename=$_POST['readFilename'];
        readFileContent($filename);
    }
    if(isset($_POST['writeFilename'])){
        $filename=$_POST['writeFilename'];
        $content=$_POST['content'];
        writeFile($filename,$content);
        echo "Content has been written to '$filename' ";
    }
}
?>

</body>
</html>
