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
    background-size: cover;
    background-repeat: no-repeat;
    background:url(https://designdesk.in/wp-content/uploads/2017/10/ssd.jpg);
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
    background: transparent;
    border:none;
    outline:none;
    color:#fff;
    background: #03a940;
    padding:8px 16px;
    border-radius: 5px;
    font-size: 14px;

}
a:link{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
    color:green;
}
a:visited{
    text-decoration: none;
    color:inherit;
}
</style>

</head>
<body>
<?php include("sidenav.php");  ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
           <h1>Admin Sign up </h1>
            <form method="post" action="adminsignup.php">
              <div class="inputBox">
                  <input type="text" name="name" autocomplete="off" required>
                   <label>Full Name</label>
               </div>
               <div class="inputBox">
                   <input type="text" name="mobile" autocomplete="off" required>
                   <label>Mobile No.</label>
                </div>
                <div class="inputBox">
                   <input type="text" name="email" autocomplete="off" required>
                   <label>Email</label>
                </div>
                <div class="inputBox">
                   <input type="password" name="password" autocomplete="off" required>
                   <label>Password</label>
                </div>
                <div class="inputBox">
                   <input type="password" name="cpassword" autocomplete="off" required>
                   <label>Confirm-Password</label>
                </div>
                <div class="input-group" >
			       <button class="btn" type="submit" name="save" style="width:70px;height:40px;background-color:aqua;"><a href="prac.php"></a>Sign up</button>
		        </div>
                <div class="column">
                    <br>
			        <a href="prac.php " class="btn btn-success" style="color:#fff">Have an account? Login</a>
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

