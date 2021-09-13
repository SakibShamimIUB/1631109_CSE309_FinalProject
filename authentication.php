<?php      
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
    include('connection.php');  
    $username = $_POST['user'];   // admin
    $password = $_POST['pass'];   // 123456
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from user where user_name = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
             // Store data in session variables
             $_SESSION["loggedin"] = true;
             $_SESSION["username"] = $username;                            
             
             // Redirect user to welcome page
             header("location: dashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";

             // Redirect user to welcome page
             header("location: admin.php");
        }     
?>  