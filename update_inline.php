<?php 
    $title = 'Update';
    include 'connection.php'; 
    include 'header.php';
?>

<div class="container">
<h1 class="text-center py-3 ">CRUD - UPDATE DATA</h1>
    <?php include 'navbar.php'; ?>
    <?php
        $eid = $_GET['eid'];
        $sql = "SELECT * FROM employee WHERE eid = {$eid}";
        $result = mysqli_query($conn,$sql) or die("Query failed");
        while ($row = mysqli_fetch_assoc($result))
        {
    ?>
    <form action="update.php" method="post">
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="hidden" class="form-control" name="eid" value="<?php echo $row['eid']; ?>">
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="col">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Mobile No</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>" required>
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">DOB</label>
                <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" required>
            </div>
            <div class="col">
                <label for="">City</label>
                <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Gender</label>
                    <?php
                        $sql1 = "SELECT * FROM genders";
                        $result1 = mysqli_query($conn,$sql1) or die("Query failed");
                        if(mysqli_num_rows($result1)>0)
                        {
                            echo "<select class='form-control' name='gender'>
                            <option value=''>--Choose--</option>";
                            while ($row1 = mysqli_fetch_assoc($result1))
                            {  
                                if($row['gender'] == $row1['gid'])
                                {
                                    $select = "selected";
                                }
                                else{
                                    $select = "";
                                }
                                echo "<option {$select} value='{$row1['gid']}'>{$row1['gname']}</option>";  
                            }
                            echo "</select>";
                        }
                    ?>
                </select>
            </div>
            <div class="col">
                <label for="">Designation</label>
                <input type="text" class="form-control" name="designation" value="<?php echo $row['designation']; ?>" required>
            </div>
        </div>
        <div>
            <input type="submit" value="Update" name="update_btn" class="btn btn-primary my-3 ">
        </div>
    </form>
    <?php
        }
    ?>
</div>

<?php
    include 'footer.php';
?>