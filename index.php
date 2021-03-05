<?php



?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post" action="upload_file.php" enctype="multipart/form-data">
            <div>
                <span>漫画计划发布平台：（若已抢坑发布到动漫之家了，务必取消动漫之家的√) </span>
            </div>
            <div>
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="动漫之家"></label>动漫之家
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="漫画人"></label>漫画人
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="轻国"></label>轻国
                <label><input type="checkbox" name="checkbox[]" value="哔咔"></label>哔咔
                <!-- <label><input type="submit" name="Submit" value="提交"></label> -->
            </div>
            <div>
                <label for="file">文件名：</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="提交文件">
                <p>PS：传输速度大概500kb/s,5MB文件大概10s。耐心等一下，成功会跳转的！</p>
            </div>
        </form> 
        <?php
        if ($_POST) {
            $value = $_POST['checkbox'];
            var_dump($value);
            echo '你的选择:' . implode(',', $value);
        }
        ?>
    </div>
</body>

</html>