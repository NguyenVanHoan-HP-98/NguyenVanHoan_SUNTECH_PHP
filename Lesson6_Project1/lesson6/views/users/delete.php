<?php
    $userId = $_GET['id'] ?? '';
    if(isset($userId))
    {
    $conn = mysqli_connect("localhost","root","","phpclass15");
    $sql = "DELETE FROM users WHERE id =".$userId;
    mysqli_query($conn,$sql);
    
    // if (isset($userId)) {
    //     $avatar = $_SESSION['users'][$userId]['avata'];
    //     unset($_SESSION['users'][$userId]);
    //     if($avatar)
    //     {
    //         $fielPath = './views/uploads/users/'.$avatar;
    //         if(file_exists($fielPath))
    //         {
    //             unlink($fielPath);
    //         }
            
    //     }
        header('location:index.php?module=user');
    }
     else {
        header('location:index.php?module=user');
    }