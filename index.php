<?php
if(isset($_POST['submit'])){
    $connectionDb = new PDO("mysql:host=localhost;dbname=contact_diary_application_db", "root", "");
    $connectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

?>
<?php include("includes/header.php") ?>
  <div class="mt-4 row">
    <div class="col-md-2">
        <div class="card card-body">
            <form action="saveContact.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control mt-2" placeholder="Phone" autofocus>
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control mt-2" placeholder="Date" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control mt-2" placeholder="Address" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control mt-2" placeholder="Email" autofocus>
                </div>
                <input type="submit" class="btn btn-success btn-block mt-2" name="save_contact" value="Save Contact"/>
            </form>
        </div>

    </div>
    <div class="col-md-9 pr-4">
        <form method="POST" action="index.php">
            <input type="text" name="q" placeholder="Search....">
            <select>
                <option value="">Select Filter</option>
                <option value="name">Name</option>
                <option value="phone">Phone</option>
                <option value="email">Email</option>
            </select>
            <input type="submit" class = "btn btn-info btn-block" name="submit" value="Find">
        </form>
        <table class="mt-3 table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connectionDb = new PDO("mysql:host=localhost;dbname=contact_diary_application_db", "root", "");
                $connectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = "SELECT * FROM contact";
                foreach ($connectionDb->query($query) as $row){ ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['age']?></td>
                        <td>
                            <a href="editContact.php?id=<?php echo $row['id_contact']?>" class="btn btn-secondary">Edit</a>
                            <a href="deleteContact.php?id=<?php echo $row['id_contact']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  </div>
<?php include("includes/footer.php")?>