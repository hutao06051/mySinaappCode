<?php
	header("Content-type: text/html; charset=gbk"); 
	$name = $_POST["name"];
	$id = $_POST["id"];
	$content = $_POST["content"];
echo <<<EOB
{
	"name": "$name",
	"id": "$id",
	"content":"$content"
}
EOB;
?>