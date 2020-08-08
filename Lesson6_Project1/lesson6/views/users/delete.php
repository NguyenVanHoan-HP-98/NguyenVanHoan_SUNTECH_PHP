<?php
    $userId = $_GET['id'] ?? '';

    if (isset($userId)) {
        $avatar = $_SESSION['users'][$userId]['avata'];
        unset($_SESSION['users'][$userId]);
        if($avatar)
        {
            $fielPath = './views/uploads/users/'.$avatar;
            if(file_exists($fielPath))
            {
                unlink($fielPath);
            }
            
        }
        header('location:index.php?module=user');
    } else {
        echo '<h3>User không tồn tại</h3>';
    }