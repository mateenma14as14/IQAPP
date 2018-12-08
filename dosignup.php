<?php
// Initialize the session
// Include config file
require_once "config.php";

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    $confirmpassword=trim($_POST["confirmpassword"]);
    if($confirmpassword==$password)
    {
      // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
       $table = 'user';
 echo $username;
 echo $password;
$query = "INSERT INTO $table (username,userpassword,email)
             VALUES ('$username', 
                      '$password',
                       '$username')";

                  if ($link->query($query) === TRUE) {
                     session_start();
                          
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                         
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}
            
                    
                    
                 
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        
    }  
    
    
    
    
    // Close connection
    mysqli_close($link);

?>
 