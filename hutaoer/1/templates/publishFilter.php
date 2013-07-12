<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://g.tbcdn.cn/kissy/k/1.3.0/kissy-min.js"></script>
</head>
<body>
	<h1>过滤掉包含components目录的脚本文件，仅支持玩客项目</h1>
	<h2>一、简单的法子</h2>
	<h3>使用说明：您直接将仓库的publish发布文件copy一下，然后粘贴到下面的文本框中，然后点击echo！</h3>
	<div><textarea id = "J_content" placeholder="把你的发布日志粘贴到这里" style="width:800px;height:200px"></textarea></div>
	<p><input id="J_echo_list" value="echo" type="button"/>过滤后的不包含components目录的脚本列表如下</p>
	<textarea id="J_result" style="width:800px;height:200px" placeholder="最终的非components脚本列表"></textarea>
	<!-- <h2>二、复杂一点儿</h2>
	<h3>使用说明：您直接将仓库的publish发布文件copy一下，然后在本地保存为txt文件，通过上传该文件，后台会自动为您处理过滤并最终生成名为no_components.txt的文件</h3>
	<form enctype="multipart/form-data" action="../async/doFilter.php" method="post">    
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">   
	<input type="file" name="upfile">   
	<input type="submit" value='上传文件'>    
	</form>   -->  
	<script type="text/javascript">
		KISSY.ready(function(S) {
			var E = S.Event, D = S.DOM, $ = S.one;
			E.on('#J_echo_list', 'click', function(e) {
				var content = $('#J_content').val();
				if(content) {
					var arr = content.split("\n");
					var len = arr.length;
					var i, tmp, pattern = new RegExp(/components/), rslt = '', count = 1;

					for(i = 0; i < len; i++) {
						tmp = arr[i];
						if(tmp.match(pattern)) {
							continue;
						} else {
							rslt += (arr[i]+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+count+'\n');
							count++;
						}
					}
					if(rslt) {
						$('#J_result').append(rslt);	
					} else {
						$('#J_result').append("<p>没有命中任何文件！</p>");	
					}
					
				} else {
					alert("亲，请输入文本!");
				}
				
				// return;
				// if(content) {
				// 	S.io({
				// 		url: '../async/doFilter.php',
				// 		dataType: 'text',
				// 		type: 'post',
				// 		data: {
				// 			"content": content
				// 		},
				// 		success: function(data) {
				// 			alert(data);
				// 		},
				// 		error: function() {
				// 			$('#J_result').append('<p>ajax error!</p>');
				// 		}
				// 	})
				// }
			})
		})
	</script>
</body>
</html>

