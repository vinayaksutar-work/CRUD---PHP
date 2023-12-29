<?php 
    $title = 'Delete';
    include 'connection.php'; 
    include 'header.php';
?>

<div class="container">
<h1 class="text-center py-3 ">CRUD - DELETE DATA</h1>
    <?php include 'navbar.php'; ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div class="col">
                <label for="">Id</label>
                <input type="text" name="eid" class="form-control">
                <input type="submit" value="Delete" name="delete_btn" class="btn btn-primary my-3">
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['delete_btn']))
        {
            $eid = $_POST['eid'];
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
        }   
    ?>
</div>

<?php
    include 'footer.php';
?>