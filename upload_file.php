<?php
require "config.php";
header("content-type:text/html;charset=utf-8");

$inputkey = $_POST['selfKey'];
$inputip = $_SERVER['REMOTE_ADDR'];
$time = date(time());
$postMessage = array($inputkey,$inputip,$time);
$ZPname = $_POST['ZPname'];
$ZPhuaSu = $_POST['ZPhuaSu'];
$saveName = $ZPname."-第".$ZPhuaSu."话".".zip";
/* echo $_POST;
var_dump($_POST);
echo $_FILES["file"]["size"]; */
/* echo $_FILES["file"]["type"]; */
//检查密钥，防止注入
save_request_all($postMessage);
$safeCode = check_key($inputkey);
if($safeCode == 0){
	echo("出错了，请检查输入参数。若仍然出现问题请联系奶嘴。");
	exit();
}


// 允许上传的图片后缀

$allowedExts = array("zip","rar");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "application/x-zip-compressed")
|| ($_FILES["file"]["type"] == "application/x-rar-compressed"))
&& ($_FILES["file"]["size"] < 40845888)   // 小于 38 mb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
/* 		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else */
		
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			/* $e=mb_detect_encoding($_FILES["file"]["name"], array("UTF-8","GBK","gb2312"));
			echo $e; */
			/* move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); */
			/* move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . iconv("UTF-8","gb2312",$_FILES["file"]["name"])); */
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . iconv("UTF-8","gb2312",$saveName));
			/* move_uploaded_file($_FILES["file"]["tmp_name"], "upload/测试数据.txt"); */
			/* echo "文件存储在: " . "upload/" . $_FILES["file"]["name"]; */
			echo "文件存储在: " . "upload/" . $saveName;
		}
	}
}
else
{
	echo "非法的文件格式";
}

?>
