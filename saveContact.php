<?php

if (isset($_POST['save_contact'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $year = (date('Y') - date('Y', strtotime($date)));
    $age = $year;

    $dataContact = [
      'name' => $name,
        'phone' => $phone,
        'date' => $date,
        'address' => $address,
        'email' => $email,
        'age' => $age
    ];
    try {
        $connectionDb = new PDO("mysql:host=localhost;dbname=contact_diary_application_db", "root", "");
        $connectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO contact (name,phone,date,address,email,age) VALUES(:name,:phone,:date,:address,:email,:age)";
        $queryPrepared= $connectionDb->prepare($query);
        $queryPrepared->execute($dataContact);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    header("Location: index.php");
}
?>