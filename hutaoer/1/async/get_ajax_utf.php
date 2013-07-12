<?php
	header("Content-type: text/html; charset=utf-8"); 
	$name = $_GET["name"];
	$id = $_GET["id"];
	$content = $_GET["content"];
echo <<<EOB
{
	"name": "$name",
	"id": "$id",
	"content":"$content"
}
EOB;
?>