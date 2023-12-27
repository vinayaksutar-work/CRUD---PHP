<?php 
    $title = 'View';
    include 'connection.php';
    include 'header.php'; 
?>
<div class="container">
    <h1 class="text-center py-3 ">CRUD - VIEW DATA</h1>
    <?php include 'navbar.php'; ?>
    <div class="table-responsive">
        <table class="table table-light table-bordered ">
            <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Designation</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    $sql = "SELECT * FROM employee JOIN genders WHERE employee.gender = genders.gid";
                    $result = mysqli_query($conn,$sql) or die("Query failed");
                    while ($row = mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <th><?php echo $row['eid']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['gname']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><a href="update_edit.php?eid=<?php echo $row['eid']; ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?eid=<?php echo $row['eid']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
    include 'footer.php'; 
?>