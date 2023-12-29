<?php
include 'connection.php';

if(isset($_POST['update_btn']))
{
    $eid = $_POST['eid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];

    $sql = "UPDATE employee SET name = '{$name}', address = '{$address}', mobile = '{$mobile}', 
    email = '{$email}', dob = '{$dob}', city = '{$city}', gender = '{$gender}', designation = '{$designation}' 
    WHERE eid = '{$eid}'";

    $result = mysqli_query($conn,$sql) or die("Query failed");

    if(!$result)
    {
        die("Not Updated. Please try again" . mysqli_error($conn));
    }
    else
    {
        ?>
            <script>
                alert("Data Updated Successfully!!");
                window.location = "view.php";
            </script>
        <?php
    }
}

mysqli_close($conn);

?>