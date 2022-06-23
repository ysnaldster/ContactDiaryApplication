<?php
    $connectionDb = new PDO("mysql:host=localhost;dbname=contact_diary_application_db", "root", "");
    $connectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $id_contact = $_GET['id'];

        $query = $connectionDb->prepare('SELECT * FROM contact WHERE id_contact=?');
        $resultQueryGetAllContacts = $query->execute([$id_contact]);
        $resultQueryGetAllContacts = $query->fetch(PDO::FETCH_ASSOC);
        $name = $resultQueryGetAllContacts['name'];
        $phone = $resultQueryGetAllContacts['phone'];
        $date = $resultQueryGetAllContacts['date'];
        $address = $resultQueryGetAllContacts['address'];
        $email = $resultQueryGetAllContacts['email'];
        $age = $resultQueryGetAllContacts['age'];
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $dataContact = ['id' => $id,
            'name' => $name,
            'phone' => $phone,
            'date' => $date,
            'address' => $address,
            'email' => $email,
            'age' => $age
        ];
        $query = "UPDATE contact SET name=:name, phone=:phone, date=:date, 
                    address=:address, email=:email, age=:age WHERE id_contact=:id";
        $queryPrepared= $connectionDb->prepare($query);
        $queryPrepared->execute($dataContact);
        header("Location: index.php");
    }
?>

<?php
    include("includes/header.php")
?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editContact.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type = "text" name="name" value="<?php echo $name; ?>" class="form-control"
                            placeholder="Update name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control mt-2" placeholder="Update phone"
                                   value="<?php echo $phone; ?>">
                        </div>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control mt-2" placeholder="Update date"
                                   value="<?php echo $date; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control mt-2" placeholder="Update address"
                                   value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control mt-2" placeholder="Update email"
                                   value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control mt-2" placeholder="Update age"
                                   value="<?php echo $age; ?>">
                        </div>
                        <button class="btn btn-success mt-2" name="update">
                            Update Contact
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include("includes/footer.php")
?>