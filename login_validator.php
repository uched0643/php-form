
<?php 
$email_err= "";
$password_err = "";

if(isset($_POST["submit"])){
    $email=trim($_POST["email"]);
    $password=$_POST["password"];

  
    if (empty($email) && !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
       $email_err='<div class ="bg-red-300 text-white"> Invalid Email </div>';
       header("location:registration.php");
    }
    elseif (empty($password)) {
        $password_err='<div class="bg-red-300 text-white">
        Password can not be left blank.
    </div>';
    header("location:registration.php");
    }
   else{
       header("location:welcome.php");
   }
}

?>

