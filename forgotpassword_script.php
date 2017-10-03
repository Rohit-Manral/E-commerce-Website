<?php
require("includes/common.php");
if(isset($_POST) & !empty($_POST)){
$email = mysqli_real_escape_string($con, $_POST['email']);
$sql = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($con, $sql) or die(mysqli_error($con)) ;
$count = mysqli_num_rows($res);
if($count == 1){
echo "Send email to user with password";
}else{
echo "User name does not exist in database";
}
}
$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : estore@ecommerce.com";
if(null!==(mail($to, $subject, $message, $headers))){
echo "Your Password has been sent to your email id";
}else{
echo "Failed to Recover your password, try again";
}
?>


