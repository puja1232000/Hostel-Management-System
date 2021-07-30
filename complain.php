<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
}
.container{       
    width:100%;
    height:100vh;
    position: relative;
    background:url(https://up-africa.net/uploads/16032084836-salon-bleu-canard-inspiration-nordique-but.jpg) ;
    background-size: cover;
}
.row{
    width: 500px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    padding:50px;
    background: rgba(0,0,0,0.8);
    border-radius: 10px;

}
.row h1{
    margin-bottom: 30px;
    color:#fff;
    text-align: center;
    text-transform: capitalize;

}
.row .inputBox{
    position: relative;
}
.row .inputBox input{
    width: 100%;
    padding:10px;
    font-size: 16px;
    color:#fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border:none;
    border-bottom:1px solid #fff;
    background: transparent;
    outline:none;

}
.row .inputBox label{
    position:absolute;
    top:0;
    left:0;
    letter-spacing: 1px;
    padding:10px 0 ;
    font-size:16px;
    color:#fff;
    transition: 0.5s;
}
.row .inputBox input:focus ~ label,
.row .inputBox input:valid ~ label{
    top:-20px;
    left:0;
    color:aqua;
    font-size:12px;
}
.row input[type="submit"]{
    width:100%;
    height:100%;
    background: transparent;
    border:none;
    outline:none;
    color:#fff;
    background: #03a940;
    padding:15px 16px;
    border-radius: 5px;
    font-size: 24px;

}

</style>

</head>
<body>
<?php include("sidenav.php");  ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
           <h1>Complain Report</h1>
            <form method="post" action="">
              <div class="inputBox">
                  <input type="text" name="Name" autocomplete="off" required>
                   <label>Full Name</label>
               </div>
               <div class="inputBox">
                   <input type="text" name="mobile" autocomplete="off" required>
                   <label>Mobile No.</label>
                </div>
                <div class="inputBox">
                   <input type="text" name="report" autocomplete="off" required>
                   <label>Complain</label>
                </div>
                <div class="inputBox">
                   <input type="text" name="against" autocomplete="off" required>
                   <label>Complaint Against</label>
                </div>
                <div class="input-group">
			       <button class="btn" type="submit" name="save"  style="width:70px;height:30px;background-color:#fff;" >Submit</button>
		        </div>
                <div><button onclick="location.href='prac.php'" style="width:70px;height:30px;top:50%;left:50%;bottom:right;background-color:aqua;">LOGOUT</button></div>
        
    </div>
    
            </form>
        </div>
    </div>    
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php 

include 'dbcon1.php';
 
if(isset($_POST['save'])){
	  $name = $_POST['Name'];
	  $mobile = $_POST['mobile'];
	  $report= $_POST['report'];
	  $against = $_POST['against'];
      
      $qq="select id from student where name = '$name'";
      $idval1=mysqli_query( $con, $qq);
      $resultarr=mysqli_fetch_assoc($idval1);
      $resultstring=$resultarr['id'];
      echo $resultstring;
      
	  

	  $insertquery = "INSERT INTO  complain ( Name , mobile , report , against,student_id)
	   VALUES('$name', '$mobile','$report','$against','$resultstring')";

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