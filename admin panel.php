<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
       <title>Responsive Equal Height Column in a Row</title>
       
    </head>
<style type="text/css">
body{
    margin:0; padding:0; box-sizing:border-box;
    font-family: 'Josefin Sans', sans-serif;
    background:src;
    background-size: cover;
    background-color: #696969;
}

.container{
    width:800px;
    margin:100px auto 0;
    display:table;
    box-sizing: border-box;
    transition: .5s;
    
}
.row{
    margin:20px 0;
    transition: .5s;
}
.column{
    background: #fff;
    display:table-cell;
    padding:10px;
    width:33.3333%;
    text-align: center;
    vertical-align: middle;
    border-right: 15px solid #fff;
    border-left: 15px solid #fff;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    transition: .5s;
}
.row:nth-child(3) .column:nth-child(1){
    background: #B22222;
    height:73.3333%;
}
.row:nth-child(3) .column:nth-child(2){
    background: #808000;
    height:73.3333%;
}
.row:nth-child(3) .column:nth-child(3){
    background: #D26913;
}
.row:nth-child(2) .column:nth-child(1){
    background: #2F4F4F;
}
.row:nth-child(2) .column:nth-child(2){
    background: #BC8F8F;
}
.row:nth-child(2) .column:nth-child(3){
    background: #A52A2A;
}
a:link{
    text-decoration: none;
    text-emphasis-color: #fff;
}
a:hover{
    text-decoration: none;
    color:green;
}
a:visited{
    text-decoration: none;
    color:inherit;
}

@media(max-width:900px){
    .container{
        margin:0;
        padding:10px;
        width:100%;
    }
    .column{
        width:100%;
        display:block;
        margin:10px 0;
        border:none;
        box-sizing:border-box;
    }
    .row{
        margin:0;
    }
}

</style>
<body> 
<?php include("sidenav.php");  ?> 
    <div class="container">
        <h1><center>ADMIN PANEL</center></h1>
        <div class="row">
            <div class="column" text-color="white">
                
                <a href="registerform.php"  class="btn btn-success" > <h1>Register student</h1> </a>
            </div>
            <div class="column">
                
                <a href="roomdetail.php"  class="btn btn-success" ><h1>Room details</h1>  </a>
            </div>
            <div class="column">
                
                <a href="displaycomplain.php"  class="btn btn-success" ><h1>Complain</h1>  </a>
            </div>
        </div>
            
        <div class="row">
            <div class="column">
                
                <a href="employee.php"  class="btn btn-success" >  <h1>Register Employee</h1></a>
                
            </div>
            <div class="column">
               
                <a href="display.php"  class="btn btn-success" ><h1>Employee details</h1>  </a>
            </div>
            <div class="column">
                
                <a href="displayregister.php"  class="btn btn-success"  ><h1>Students List</h1> </a>
                <p></p>
            </div>
        </div>
<div><button onclick="location.href='prac.php'" style="width:70px;height:40px;background-color:F0F8FF;border-radius:12px;">LOGOUT</button></div>
        
    </div>
    

  
</body>
</html>