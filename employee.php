<!DOCTYPE html>
<html>
<head>
    <title></title>
	<link rel="stylesheet" type="text/css" href="css/sty.css">
</head>
<body>
<?php include("sidenav.php");  ?> 


<div class="content">
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="completeaddress" value="">
		</div>
		<div class="input-group">
			<label>Mobile No.</label>
			<input type="text" name="mobile" value="">
		</div>
		<div class="input-group">
			<label>Joining Date</label>
			<input type="text" name="joiningdate" value="">
		</div>
		<div class="input-group">
			<label>Working As</label>
			<input type="text" name="workingas" value="">
		</div>
		<div class="input-group">
			<label>Salary</label>
			<input type="text" name="salary" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
		<div class="input-group">
		  
			<a href="display.php">check </a>
		</div>
		  
</form>
</div>
</body>
</html>

<?php 

include 'dbcon1.php';
 
if(isset($_POST['save'])){
	  $name = $_POST['fullname'];
	  $address = $_POST['completeaddress'];
	  $mobile= $_POST['mobile'];
	  $joiningdate = $_POST['joiningdate'];
	  $workingas = $_POST['workingas'];
	  $salary = $_POST['salary'];

	  $insertquery = "INSERT INTO  employee (fullname,completeaddress,mobile,joiningdate,workingas,salary)
	   VALUES('$name','$address','$mobile','$joiningdate','$workingas','$salary')";

	  $q=mysqli_query($con,$insertquery); 

if($q){
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
}
?>