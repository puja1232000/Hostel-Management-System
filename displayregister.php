<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/sty.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

<style>
table, tr, th {
   
  border: 1px solid black;
  
}
table{
    width:80%;
    border-collapse: collapse;
}
th{
    text-align: center;
    background-color: #8B008B;
    color: white;
}
th, tr {
  padding: 15px;
  text-align: left;
}
</style>    
</head>
<body>
<?php include("sidenav2.php");  ?> 
<div class="main-div">
    <h1><center>Registerred Students List</center></h1>
    <div class="center-div">
        <div   class="table-responsive" >
        <table border="2" cellspacing="15">
            <thead>
               <tr>
                   <th>id</th>
                   <th>Full Name</th>
                   <th>Reg_No.</th>
                   <th>Email</th>
                   <th>Block</th>
                   <th>Gender</th>
                   <th>D.O.B</th>
                   <th>Guardian Name</th>
                   <th>Guardian Occupation</th>
                    <th>Mobile No.</th>
                   <th>Address</th>
                   <th>Fee Details</th>
                    <th colspan="2">Operation</th>
                </tr>  
            </thead>
            <tbody>

            <?php 
        
                 include 'dbcon1.php';
                    
                   $selectquery ="select * from student ";
                   $query=mysqli_query($con,$selectquery);
   
                   $nums=mysqli_num_rows($query);
                   while($res=mysqli_fetch_array($query)){
            
                ?>    
                      <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['Name']; ?></td>
                            <td><?php echo $res['reg_no']; ?></td>
                            <td><?php echo $res['Email']; ?></td>
                            <td><?php echo $res['block']; ?></td>
                            <td><?php echo $res['gender']; ?></td>
                            <td><?php echo $res['DOB']; ?></td>
                            <td><?php echo $res['GuardianName']; ?></td>
                            <td><?php echo $res['Occupation']; ?></td>
                            <td><?php echo $res['Number']; ?></td>
                            <td><?php echo $res['Address']; ?></td>
                            <td><a href="feeDetails.php? id=<?php echo $res['id']; ?>">Show</a></td>
                           <td><a href="updatestudent.php? id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-pencil-square" aria-hidden="true"></i> </a></td>
                           <td><a href="deletestudent.php? id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"></i>  </a></td>
                      </tr>
                <?php
                
                    }

            ?>        
            </tbody>
        </table>
       
        </div>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
       $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

</body>
</html>