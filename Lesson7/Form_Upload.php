<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Anh</title>
</head>
<body>
    <h1>Upload File In php</h1>
    <form action="" method="POST" enctype="multipart/form-data" >
    <input type="file" name="img">
    <button name="btn-upload">upload file</button>
    </form>

    <?php
        if(isset($_POST['btn-upload']))
        {
            if(!empty($_FILES['img']['name']))
            {
                $ext =max(explode('.',$_FILES['img']['name']));

                move_uploaded_file(($_FILES['img']['tmp_name']),'./images/'.time().".{$ext}");
                echo '<pre>';
                print_r($_FILES['img']);
                echo '<pre>';


                echo $ext;
            }
            else{
                echo 'Bạn chưa chọn ảnh';
            }
        }    
    ?>    
</body>
</html>