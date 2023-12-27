<?php
include 'connection.php';

$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];


function validMobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}
if(validMobile($mobile)){
    echo "Valid Mobile Number";
}else{
    echo "Not Valid";
}

if(isset($_POST['add_btn']))
{

    $sql = "INSERT INTO employee (name,address,mobile,email,dob,city,gender,designation)
    VALUES ('$name','$address','$mobile','$email','$dob','$city','$gender','$designation')";

    $result = mysqli_query($conn,$sql) or die("Query failed");

    if(!$result)
    {
        die("Not Inserted" . mysqli_error($conn));
    }
    else
    {
        ?>
            <script>
                alert("Data inserted successfully");
                window.location = "view.php";
            </script>
        <?php
    }
}

mysqli_close($conn);

?>