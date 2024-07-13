<?php
$con=mysqli_connect("localhost","root","","announcements");
if(!$con)
{
die('could not connect:'.mysqli_connect_error());
}
//echo "$_POST[cimage]";//$_POST[cimage]
$data = file_get_contents($_FILES['image']['tmp_name']);
$sql = "INSERT INTO content (content, ctype, image) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $_POST['content'], $_POST['ctype'], $data);
    if (!mysqli_stmt_execute($stmt)) {
        echo "Error executing query: " . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($con);
}

header("Location: home.php");
mysqli_close($con)

?>
