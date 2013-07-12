<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head>		selcet data
	</head><body><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>--<?php echo ($vo["data"]); ?>--<?php echo ($vo["age"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?><?
			echo 1233;
			echo ($_SERVER['PATH_INFO']);
		?></body></html>