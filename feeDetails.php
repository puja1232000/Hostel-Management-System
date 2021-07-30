<?php 
        
include 'dbcon1.php';

$id=$_GET['id'];

$feequery="CALL get_fee('$id')";
$query=mysqli_query($con,$feequery);
?>
<html>
<head>
<style>
body{
   
   background-size: cover;  
   background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)),url(https://engineeringcollege.in/wp-content/uploads/2018/07/3-2.jpg)
}
table ,th,td{
    border:1px solid black;
}
table{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    border-collapse: collapse;
    width:800px;
    border:1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    letter-spacing: 1px;
    padding:10px 0 ;
    font-size:26px;
   
}
table{
    width:50%;
    border-collapse: collapse;
}

th{
    text-align: center;
    background-color: #008B8B;
    color: white;
}
td{
    text-align: center;
    height:70%;
    width:40%;
    color: #ddd;
}
th, td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
.content{
   
    min-height:10vh;
    margin-top:500px;
    margin-left:700px;
    text-decoration-color: #ddd;
    width:80px;height:10px;background-color:aqua;
}

</style></head>
<body>
<?php include("sidenav2.php");  ?>
<div>
<table><th>NAME</th><th>REG_No</th><th>FEE</th><th>PAID</th><th>DUE</th>

<?php while ($row = mysqli_fetch_array($query)){     ?>

<tr><td><?php echo $row[0] ?></td><td><?php echo $row[1] ?></td><td><?php echo $row[2] ?></td><td><?php echo $row[3] ?></td><td><?php echo $row[4] ?></td></tr> 

<?php  } ?>

</table>
</div>
<div class="content">
<a href="displayregister.php"  class="btn btn-success" style="color:#008B8B;"> Go Back</a>
</div>
</body></html>   
