<?php
    $title = 'Home';
    include 'connection.php';
    include 'header.php';
    
?>

<div class="container">
<h1 class="text-center py-3 ">CRUD - ADD DATA</h1>
    <?php include 'navbar.php'; ?>
    <form action="save.php" method="post">
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
            </div>
            <div class="col">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Mobile No</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" required>
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">DOB</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter DOB" required>
            </div>
            <div class="col">
                <label for="">City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter City" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Gender</label>
                <select class="form-control" name="gender" required>
                    <option value="">--Choose--</option>
                    <?php
                        $sql = "SELECT * FROM genders";
                        $result = mysqli_query($conn,$sql) or die("Query failed");
                        while ($row = mysqli_fetch_assoc($result))
                        {    
                    ?>
                        <option value="<?php echo $row['gid']; ?>"><?php echo $row['gname']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="col">
                <label for="">Designation</label>
                <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>
            </div>
        </div>
        <div>
            <input type="submit" value="Add Data" name="add_btn" class="btn btn-primary my-3 ">
        </div>
    </form>
</div>

<?php
    include 'footer.php';
?>