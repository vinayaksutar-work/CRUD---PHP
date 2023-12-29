<?php

include 'connection.php';

$eid = $_GET['eid'];

$sql = "DELETE FROM employee WHERE eid = {$eid}";
$result = mysqli_query($conn,$sql) or die("Query failed");

if(!$result)
{
    die("Not Deleted. Please try again");
}
else
{
    ?>
    <script>
        alert("Data Deleted Successfully!!");
        window.location = "view.php";
    </script>
    <?php
}

mysqli_close($conn);
?>