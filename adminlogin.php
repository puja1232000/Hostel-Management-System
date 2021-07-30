<?php
session_start();


$con= mysqli_connect ('localhost' ,'root');
if($con){
    echo"Connection Successful";
}
else{
    echo"No Connection";
}
mysqli_select_db($con, 'gathosteldata');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pwd=$_POST['password'];

    $q="select * from adminsignup  where email='$email'";
    $query=mysqli_query($con,$q);

    $emailcount=mysqli_num_rows($query);
    
    if($emailcount){
        $email_pass=mysqli_fetch_assoc($query);

        $db_pass=$email_pass['password'];
        
        $pass=password_verify($pwd,$db_pass);
        if($pass){
            echo "login successful";
            header('location:admin panel.php');
        }else{
            echo "password incorrect";
        }
    }else{
        echo "invalid email";
    }
}


?>
