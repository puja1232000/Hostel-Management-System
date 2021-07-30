<?php

$con= mysqli_connect ('localhost' ,'root',"",'gathosteldata');

//adding data

extract($_POST);

if(isset($_POST['readRecord'])){
    $data = '<table class="table table-bordered table-striped">
        <tr>
           <th>No.</th>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>Branchname</th>
           <th>Batch</th>
           <th>Floor</th>
           <th>Room Type</th>
           <th>Room NO</th>
           <th>Edit Action</th>
           <th>Delete Action</th>
        </tr>';
    
    $displayquery=" SELECT * FROM roomdetail ";
    $result=mysqli_query($con,$displayquery);

    if(!$result || mysqli_num_rows($result) > 0){

        $number = 1;
        while($row = mysqli_fetch_assoc($result)){
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['firstname'].'</td>
                <td>'.$row['lastname'].'</td>
                <td>'.$row['branchname'].'</td>
                <td>'.$row['batch'].'</td>
                <td>'.$row['floor'].'</td>
                <td>'.$row['roomtype'].'</td>
                <td>'.$row['roomno'].'</td>
                <td>
                   <button onclick="GetUserDetails('.$row['id'].')"
                     class="btn btn-warning">Edit</button>
                </td>
                <td>
                   <button onclick="DeleteUser('.$row['id'].')"
                     class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
        
    }
    $data .= '</table>';
      echo $data;
}

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['branchname']) && isset($_POST['batch']) && isset($_POST['floor'])
 && isset($_POST['roomtype']) && isset($_POST['roomno']))

{
    $query="INSERT INTO roomdetail( firstname,lastname,branchname,batch,floor,roomtype,roomno) 
    VALUES ('$firstname','$lastname','$branchname','$batch','$floor','$roomtype','$roomno') ";

    mysqli_query($con,$query );
}
 
///delete user
if(isset($_POST['deleteid'])){
    $userid=$_POST['deleteid'];
    $deletequery="delete from roomdetail where id='$userid'";
    mysqli_query($con,$deletequery );
}

///update user
if(isset($_POST['id']) && isset($_POST['id']) == "1")
{
    $user_id=$_GET['id'];
    $query="SELECT * FROM romdetail where id='$user_id'";
    if(!$result=mysqli_query($con,$query)) {
        exit();
    }

    $response=array();

    if(!$result || mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            $response=$row;
        }
    }else{
        $response['status']=200;
        $response['message']="Data Not Found!";
    }

    echo json_encode($response);
}
else{
    $response['status']=200;
    $response['message']="Invalid Request!"; 
}

///update user
if(isset($_POST['hidden_user_idupd'])){

    $hidden_user_idupd=$_POST['hidden_user_idupd'];
    $firstnameupd=$_POST['firstnameupd'];
    $lastnameupd=$_POST['lastnameupd'];
    $branchnameupd=$_POST['branchnameupd'];
    $batchupd=$_POST['batchupd'];
    $floorupd=$_POST['floorupd'];
    $roomtypeupd=$_POST['roomtypeupd'];
    $roomnoupd=$_POST['roomnoupd'];

    $query=" UPDATE roomdetail SET `firstname`='$firstnameupd',`lastname`='$lastnameupd,
      `branchname`='$branchnameupd',`batch`='$batchupd',`floor`='$floorupd',`roomtype`='$roomtypeupd,
       `roomno`='$roomnoupd' WHERE id='$hidden_user_idupd' ";
    mysqli_query($con,$qyery);

}



?>