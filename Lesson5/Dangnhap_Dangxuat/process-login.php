<?php
    session_start();
    
    $username = $_POST['tk'];
    $password = $_POST['mk'];
    
    if(!$username || !$password)
    {
        $_SESSION['errors'] = "Vui lòng nhập đủ mật khẩu và tài khoản";
        header('location: form-user.php');
    }
    else 

    if($username != 'admin' || $password != 'admin')
    {
        //unset($_SESSION['errors']);
        $_SESSION['errors'] = "Sai tên đăng nhập hoặc mật khẩu"; 
        header('location: form-user.php');
    }
   else

    if($username && $password)
    {
        unset($_SESSION['errors']);
        echo $username . $password;

        $_SESSION['user'] = [
            'name' => $username,
            'pass' => $password
        ];
        header('location: admin.php');
    }
?>