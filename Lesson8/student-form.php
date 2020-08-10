<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide{
            display: none;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <?php
       $step = isset($_GET['step']) && $_GET['step'] == 2 ? $_GET['step'] : 1;
       if(!empty($_POST))
       {
           if($step ==1 &&($_POST['yourname'] == null || $_POST['email'] == null || $_POST['phone'] == null))
           {
               echo 'Nhập đủ thông tin';
           }
           
           if($step == 1 && !$_POST['yourname'] == null && !$_POST['email'] == null && !$_POST['phone'] == null){
               $_SESSION['step-one'] = [
                   'yourname'=> $_POST['yourname'],
                   'email'=> $_POST['email'],
                   'phone'=> $_POST['phone'],
               ];
               header('location:student-form.php?step=2');
           }
           if($step == 2 && !$_POST['otp'])
           {
                echo 'OTP chưa đúng';
           }
       }
    ?>
    <form action="student-form.php?step=<?= $step?>" method="POST">
        <div class="step-one <?= $step == 2 ? 'hide' : '' ?>">
            <input type="text" name="yourname" placeholder="Your Name" value="<?= $_SESSION['step-one']['yourname'] ?? null; ?> ">
            <br><br>
            <input type="text" name="email" placeholder="Your Email" value="<?= $_SESSION['step-one']['email'] ?? null; ?> ">
            <br><br>
            <input type="text" name="phone" placeholder="Your Phone" value="<?= $_SESSION['step-one']['phone'] ?? null; ?> ">
            <br><br>
            <button><a href="student-form.php?step=1">Back</a>
            <button>Next</button>
        </div>
        <div class="step-two <?= $step == 1 ? 'hide' : '' ?>">
            <input type="text" name="otp" placeholder="Your Code">
            <br><br>
            <button><a href="student-form.php?step=1">Back</a>
            <button>Register</button>
        </div>
    </form>
</body>
</html>