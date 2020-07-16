<?php
    $userId = $_GET['id'] ?? '';

    if (isset($userId)) {
        unset($_SESSION['users'][$userId]);
        header('location:index.php?module=user');
    } else {
        echo '<h3>User không tồn tại</h3>';
    }