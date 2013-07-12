<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<h1>叛别是否是PC客户端</h1>
	<pre>
	function isPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod", "BlackBerry", "UCWEB", "MQQBrowser");
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
	}
	</pre>
	<div class="box" id="J_msg"></div>
	<script type="text/javascript">
		function isPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod", "BlackBerry", "UCWEB", "MQQBrowser");
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
		}
		var msgDiv = document.getElementById('J_msg');
		J_msg.innerHTML = "您的浏览器是安装在PC客户端：" + isPC();
	</script>
</html>