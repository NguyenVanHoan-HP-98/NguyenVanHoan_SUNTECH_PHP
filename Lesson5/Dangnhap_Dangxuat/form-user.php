<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title></title>
</head>
<body>
    <?php
    if( isset($_SESSION['errors']) && $_SESSION['errors'] != null)
    {
        
                echo $_SESSION['errors'];
            
    }
    ?>
    <form action="process-login.php" method="POST">
        <label for="">Tên đăng nhập : </label>
        <input type="text" name="tk">
        <br/>
        <label for="">Mật khẩu: </label>
        <input type="password" name="mk">
        <br/>
        <label for="">&nbsp;</label>
        <button type="submit">Đăng nhập</button>

    </form>
</body>
</html>