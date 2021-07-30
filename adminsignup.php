<?php
session_start();
header('location:prac.php');

$con= mysqli_connect ('localhost' ,'root');
if($con){
    echo"Connection Successful";
}
else{
    echo"No Connection";
}
mysqli_select_db($con, 'gathosteldata');

if(isset($_POST['save'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $pwd= mysqli_real_escape_string($con,$_POST['password']);
    $repwd= mysqli_real_escape_string($con,$_POST['cpassword']);

    $pass=password_hash($pwd,PASSWORD_DEFAULT);
    $cpass=password_hash($repwd,PASSWORD_DEFAULT);

    $emailquery="select * from adminsignup where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
    
    if($emailcount>0){
        echo "email already exists";
        
    }else{
        if($pwd===$repwd){
            
            $insertquery="insert into adminsignup(name,mobile,email,password,cpassword) values('$name','$mobile','$email','$pass','$cpass')";
            $iquery=mysqli_query($con,$insertquery);
            
            if($iquery){
                ?>
                <script>
                    alert('Insertion successful');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('Not Inserted');
                </script>
                <?php
            }
            
        
        } else{
            echo"password are not matching";
          }
          
    }
    
}    
?>    