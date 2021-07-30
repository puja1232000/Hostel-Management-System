<?php 
        
include 'dbcon1.php';

$id=$_GET['id'];

$deletequery="DELETE FROM student  WHERE id=$id";
$query=mysqli_query($con,$deletequery);

header('location:displayregister.php');

if($query){
    ?>
    <script>
        alert('delete successful');
    </script>
    <?php
    }else{
    ?>
    <script>
        alert('Not deleted');
    </script>
    <?php
    }


?>