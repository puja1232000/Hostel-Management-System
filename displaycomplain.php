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
</head>
<body>
<?php include("sidenav2.php");  ?> 
<div class="main-div">
    <h1><center>Reported Complains </center></h1>
    <div class="center-div">
        <div   class="table table-bordered table-striped" >
        <table border="2" cellspacing="15">
            <tr>
                <th>id</th>
                <th>full name</th>
                
                <th>mobile</th>
                <th>complain for</th>
                <th>complain against</th>
                
               
            </tr>
            <tbody>

<?php 
        
    include 'dbcon1.php';

    $selectquery ="select * from complain ";
    $query=mysqli_query($con,$selectquery);
   
    $num=mysqli_num_rows($query);
    while($result=mysqli_fetch_array($query)){

?>    
                <tr>
                    <td><?php echo $result['id']; ?> </td>
                    <td> <?php echo $result['Name']; ?></td>
                  
                    <td><?php echo $result['mobile']; ?></td>
                    <td><?php echo $result['report']; ?></td>
                    <td><?php echo $result['against']; ?></td>
                   
                   
                    
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