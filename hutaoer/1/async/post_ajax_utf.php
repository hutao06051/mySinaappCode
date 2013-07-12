<?php
	header("Content-type: text/html; charset=utf-8");
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