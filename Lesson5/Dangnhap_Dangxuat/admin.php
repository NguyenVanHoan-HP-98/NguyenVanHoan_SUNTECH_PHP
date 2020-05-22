<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
        header('location: form-user.php');
    }
    else
    {
        echo "Đăng nhập thành công";
        echo '<br/>';
        echo "Xin chào : ". $_SESSION['user']['name'];
        echo '<br/>';
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="unset-session.php">logout</a>
</body>
</html>