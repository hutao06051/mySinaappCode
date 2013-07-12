<?php
	// header("Content-type: text/html; charset=gbk"); 
	/*	$name = $_POST["content"];
		echo strstr($name);
	echo <<<EOB
	"$name"
	EOB;*/
	$code = $_FILES["upfile"]['error'];
	$fileName = $_FILES["upfile"]["name"];
	$fileType = $_FILES["upfile"]["type"];
	$fileSize = $_FILES["upfile"]["size"];
	$filePos = $_FILES["upfile"]["tmp_name"];
	$tempArr = explode('.', $fileName);
	$fileExt = strtolower((trim(array_pop($tempArr))));
	$dir = $_POST['dir'];
	echo $dir;
	if($fileExt !== "txt") {
		exit("您上传的不是txt文件哦！");
	}

	if( $code> 0) {
		echo "Error:".$code."<br/>";
	} else {
		echo "Upload: $fileName <br />";
  		echo "Type: $fileType <br />";
  		echo "Size:  Kb<br />";
  		echo "Stored in: $filePos <br/>"; 
	}



	if(file_exists("D:/upload/$fileName")) {
		echo "$fileName already exists!";
	} else {
		move_uploaded_file($fileName, "D:/upload/$fileName");
		echo "Stored in: D:/upload/$fileName";
	}

?>