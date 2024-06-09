<?php

$conn = new Database();

$result = $conn->query("SELECT * FROM add_project")->fetchAll();

view ('admin-project-list.php', [
    'data' => $result ?? ''
]);