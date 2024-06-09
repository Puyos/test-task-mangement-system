<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $conn = new Database();

    $conn->query("INSERT INTO add_project (name, status, start_date, end_date, manager, team_manager, description) VALUES(:name, :status, :start_date, :end_date, :manager, :team_manager, :description)", [
        "name" => $_POST['name'],
        "status" => $_POST['status'],
        "start_date" => $_POST['start_date'],
        "end_date" => $_POST['end_date'],
        "manager" => $_POST['manager'],
        "team_manager" => $_POST['team_manager'],
        "description" => $_POST['description']
    ]);

    if(!$conn)
    {
        redirect("/create");
    }


}

view('add-project.php');