<?php
    $connectionDb = new PDO("mysql:host=localhost;dbname=contact_diary_application_db", "root", "");
    $connectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_GET['id'])){
        $id_contact = $_GET['id'];
        echo $id_contact;
        $query = "DELETE FROM contact WHERE id_contact=?";
        $queryPrepared= $connectionDb->prepare($query);
        $queryPrepared->execute([$id_contact]);
        header("Location: index.php");
    }
?>