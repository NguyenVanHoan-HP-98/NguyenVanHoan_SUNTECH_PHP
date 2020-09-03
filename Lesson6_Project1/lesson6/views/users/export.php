<?php
    $conn = mysqli_connect("localhost","root","","phpclass15");
    $sql = 'SELECT *FROM users';
    $query = mysqli_query($conn,$sql);
    $users = [];
    while($row = mysqli_fetch_object($query))
    {
        array_push($users, $row);
    }

    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=user_download.csv;");
    header("Pragma: no-cache");
    header("Expires: 0");
    header('Content-Type: application/csv; charset=UTF-8');

    $output = fopen("php://output", "w");
    foreach ($users as $user) {
        fputcsv($output, $user);
    }
    fclose($output);
    
?>