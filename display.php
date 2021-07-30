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
    <h1><center>List of Employees</center></h1>
    <div class="center-div">
        <div class="table-responsive">
        <table border="2" cellspacing="10">
            <thead>
                <th>id</th>
                <th>fullname</th>
                <th>completeaddress</th>
                <th>mobile</th>
                <th>joiningdate</th>
                <th>workingas</th>
                <th>salary</th>
                <th colspan="2">Operation</th>
            </thead>
            <tbody>

<?php 
        
    include 'dbcon1.php';

    $selectquery ="select * from employee ";
    $query=mysqli_query($con,$selectquery);
   
    $num=mysqli_num_rows($query);
    while($result=mysqli_fetch_array($query)){

?>    
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['fullname']; ?></td>
                    <td><?php echo $result['completeaddress']; ?></td>
                    <td><?php echo $result['mobile']; ?></td>
                    <td><?php echo $result['joiningdate']; ?></td>
                    <td><?php echo $result['workingas']; ?></td>
                    <td><?php echo $result['salary']; ?></td>
                    <td><a href="update.php? id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-pencil-square" aria-hidden="true"></i> </a></td>
                    <td><a href="delete.php? id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"></i>  </a></td>
                    
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