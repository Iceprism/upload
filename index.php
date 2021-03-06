<?php
header("content-type:text/html;charset=utf-8");

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>

<body>
    <div><!-- upload_file.php -->
        <form method="post" action="upload_file.php" enctype="multipart/form-data">
            <div>
                <h2>绿茶漫画发布平台：</h2>
                <h3>（若已抢坑发布到动漫之家了，务必取消动漫之家的√) </h3>
                <b>1.若需要发布无修版本，请勾选哔咔，轻国目前也可以发布无修版本</b><br>
                <b>2.不要重复发布，在同一时段内，默认替换旧的，若发布出错请联系@奶嘴</b>
            </div>
            <div>
            <p>发布平台：</p>
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="动漫之家"></label>动漫之家
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="漫画人"></label>漫画人
                <label><input type="checkbox" checked="checked" name="checkbox[]" value="轻国"></label>轻国
                <label><input type="checkbox" name="checkbox[]" value="哔咔"></label>哔咔
                <!-- <label><input type="submit" name="Submit" value="提交"></label> -->
            </div>
            <div>
            <br>
            <span>发布时间，截稿后会打包发布给各平台<br>（已过时间的当天则默认为第二天）：</span><br>
                <label><input type="radio" checked="checked" name="releaseT" value="上午11点"></label>上午11点整截稿
                <label><input type="radio" name="releaseT" value="下午5点"></label>下午5点整截稿
                <!-- <label><input type="submit" name="Submit" value="提交"></label> -->
            </div>
            <div>
            <hr>
                <span>作品名称(务必填写正确全称)：</span>
                <input type="text" name="ZPname"><br>
                <span>第几话(填入数字即可): 第</span>
                <input type="text" name="ZPhuaSu">话<br>
                <span>发布人的Key(问奶嘴要):</span>
                <input type="text" name="selfKey"><br>
            </div>
            <div>
            <b>文件务必进行压缩，格式为zip。否则会上传失败！文件大小若38MB请直接发给奶嘴</b><br>
                <label for="file">文件名：</label>
                <input type="file" name="file" id="file"><p>选择文件↑后，点击提交文件↓：</p>
                <input type="submit" name="submit" value="提交文件">
                <p>PS：传输速度大概300kb/s,10MB文件大概40s。耐心等一下，成功会跳转的！</p>
            </div>
        </form> 
        <?php
        if ($_POST) {
            $value = $_POST['checkbox'];
            var_dump($value);
            $values = $_POST['releaseT'];
            var_dump($values);
            echo $_POST['selfKey'];
            echo '你的选择:' . implode(',', $value);
        }
        ?>
    </div>
</body>

</html>