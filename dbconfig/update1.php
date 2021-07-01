<?php include 'db.php'; 

$success = 1;
if(isset($success))
{
    

echo '<script> alert("");</script>';
    
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Package = $_POST['Package'];

    echo '<script> alert("Hello1");</script>';


    $query = "UPDATE USER_INFO SET name='$name', birthday='$birthday', email='$email', phone='$phone', Package='$Package' WHERE email='$email'";
    $query_run = mysqli_query($db,$query);

    echo '<script> alert("Hello2");</script>';

    if($query_run)
    {
        echo '<script> alert("Data Updated");</script>';
        header('location:admin.php');
        echo '<script> alert("Hello30");</script>';
    }
    else{

        echo '<script> alert("Data NOt Updated");</script>';
        echo '<script> alert("Hello4");</script>';
    }


}






?>