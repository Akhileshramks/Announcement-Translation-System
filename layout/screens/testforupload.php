<?php
 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "announcements";
  
try {
    $conn = new PDO(
        "mysql:host=$server; dbname=$dbname",
        "$username", "$password"
    );
     
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
}
catch(PDOException $e) {
    die('Unable to connect with the database');
}
 

if(isset($_POST['submit'])) {
  
    // Count total files
    $countfiles = count($_FILES['files']['name']);
   
    // Prepared statement
    $query = "INSERT INTO images (name,image) VALUES(?,?)";
  
    $statement = $conn->prepare($query);
  
    // Loop all files

  
        // File name
        $filename = $_FILES['files']['name'][0];
        echo $filename;
        // Location
        $target_file = 'C:\xampp1\htdocs\webapp8-main\webapp8-main\layout\screens\\'.$filename;
        echo "file upload";
        // file extension
        $file_extension = pathinfo(
            $target_file, PATHINFO_EXTENSION);
             
        $file_extension = strtolower($file_extension);
      
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg");
      
        if(in_array($file_extension, $valid_extension)) {
  
            // Upload file
            /*if(move_uploaded_file(
                $_FILES['files']['tmp_name'][$i],
                $target_file)
            ) {*/
 
                // Execute query
                $statement->execute(array($filename,$target_file));
            //}
        }
    
     
    echo "File upload successfully";
}

?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>Geeks for geeks Image Upload</title>
</head>
 
<body>
    <h1>Upload Images</h1>
 
    <form method='post' action=''
        enctype='multipart/form-data'>
        <input type='file' name='files[]' multiple />
        <input type='submit' value='Submit' name='submit' />
    </form>
 
    <a href="view.php">|View Uploads|</a>
    <?php
    $stmt = $conn->prepare('select * from images');
    $stmt->execute();
    $imagelist = $stmt->fetchAll();
  
    foreach($imagelist as $image) {
  
        echo("
    <img src='$image[image]'
        title='$image[name]'
        >");
    } ?>

</body>
 
</html>