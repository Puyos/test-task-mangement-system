<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $conn = new Database();

    $result = $conn->query("INSERT INTO create_user(fname, lname, image, email, password, role) VALUES(:fname, :lname, :image, :email, :password, :role)", [
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "image" => $_POST['image'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "role" => $_POST['role']
    ]);

    if(!$result) redirect("/create_user");
    
    redirect("/create_user");
}


view ('add-user.php');