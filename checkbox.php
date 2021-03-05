<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form name="form1" method="post" action="">
            <label><input type="checkbox" name="checkbox[]" value="复选一"></label>复选一
            <label><input type="checkbox" name="checkbox[]" value="复选二"></label>复选二
            <label><input type="checkbox" name="checkbox[]" value="复选三"></label>复选三
            <label><input type="checkbox" name="checkbox[]" value="复选四"></label>复选四
            <label><input type="submit" name="Submit" value="提交"></label>
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