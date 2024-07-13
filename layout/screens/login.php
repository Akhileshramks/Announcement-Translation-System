<?php
/*$con=mysqli_connect("localhost","root","","announcements");
if(!$con)
{
die('could not connect:'.mysqli_connect_error());
}
$sql="select * from login where userid='$_POST[username]' and password='$_POST[password]'";

if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}else{echo "connected";}
$res=$con->query($sql);
if(mysqli_num_rows($res)>0){
    if(strcmp("Admin",$POST['usertype'])){
        header("Location: explore.html");
    }else{
        header("Location: home.html");
    }
}else{
    echo "no user found";
    echo mysqli_num_rows($res);
}
mysqli_close($con)
*/

//session creation

session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "announcements";



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    
    $_SESSION['username'] = $username;
    
    $password = $_POST['password'];
    $role = $_POST['usertype'];

    // Query database
    $sql = "SELECT * FROM login WHERE userid='$username' AND password='$password' AND usertype='$role'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();  
    $_SESSION['email'] = $row['email'];
    $_SESSION['atype'] = $row['atype'];
    if ($result->num_rows > 0) {
        // Valid credentials
        if (strcmp("admin",$role)==0) {
            header("Location: home.php");
        } elseif (strcmp("user",$role)==0) {
            header("Location: explore.php?view-topics=%25%25#");
        }
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username, password, or role.";
    }
}

$conn->close();

?>
