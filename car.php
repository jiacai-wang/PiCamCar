<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=0" />
<title>我的监控小车</title>
<style>
	body {
		width: 90%;
		margin: 0 auto;
		font-family: Tahoma, Verdana, Arial, sans-serif;
	}
	button {
		font-size: 2em;
		width: 4em;
		height: 2em;
	}
	input {
		height: 3em;
		width: 3em;
	}
	span {
		font-size: 1em;
	}
	table{
		width: 80%;
	}
</style>
<script src="https://cdn.bootcss.com/flv.js/1.4.2/flv.min.js"></script>
<script type="text/javascript" src="./movement.js" ></script>


</head>
<body>
<h2>我的监控小车红红火火恍恍惚惚哈哈哈哈</h2>
<p>TODO:</p>
<ol>
	<li><del>摄像头推流到web页面</del> √</li>
	<li><del>降低画面延时</del>&nbsp;&nbsp;<del>3s不能再少了。。</del>&nbsp;&nbsp;菜鸡，没那个能力。</li>
	<li><del>页面鉴权？？</del>&nbsp;&nbsp;懒得要死鉴个鸡毛</li>
	<li><del>加上音频采集</del>&nbsp;&nbsp;不加了，又要买usb麦</li>
	<li><del>造个小车</del> √</li>
	<li><del>树莓派GPIO控制小车马达转动</del> √</li>
	<li>实现web控制</li>
</ol>
<p>注：因页面有几秒延时(内网3s，外网7s左右)，前进后退动作只持续0.3s<p>
<br>
<hr>
<?php
	$isRunning=exec("ps -e |grep livego");
	if(empty($isRunning)):
?>
<h3>看什么看，摄像头还没有开启呢😜</h3>
<?php
	else:
?>
<video controls muted id="videoElement" width="90%" >你的浏览器不支持HTML5 video标签</video>
<script type="text/javascript">
    if (flvjs.isSupported()) {
        var videoElement = document.getElementById('videoElement');
        var flvPlayer = flvjs.createPlayer({
            type: 'flv',
            url: '/car/live/movie.flv'
        });
        flvPlayer.attachMediaElement(videoElement);
        flvPlayer.load();
        flvPlayer.play();
    }
</script>
<br>
<table>
<td><button id="f" onclick="Forward()" >前进</button></td>
<td><button id="b" onclick="Backward()" >后退</button></td>
<td><button id="light" onclick="ToggleLight()" >开灯</button></td>
</table>
<span>
<p>行驶方向:</p>
<input type="radio" name="direction" onclick="LeftLeft()" >左转
<input type="radio" name="direction" onclick="Left()" >略左
<input type="radio" name="direction" onclick="Straight()" checked>直行
<input type="radio" name="direction" onclick="Right()" >略右
<input type="radio" name="direction" onclick="RightRight()" >右转
<p>摄像头方向：</p>
<input type="radio" name="cam" onclick="CamLeft()" >左
<input type="radio" name="cam" onclick="CamMiddle()" checked >中
<input type="radio" name="cam" onclick="CamRight()" >右
</span>
<?php
	exec("gpio mode 23 pwm");
	exec("gpio mode 26 pwm");
	exec("gpio pwm-ms");
	exec("gpio pwmc 1920");
	exec("gpio pwmr 200");
	exec("gpio pwm 23 15");
	exec("gpio pwm 26 15");

	exec("gpio mode 21 output");
	exec("gpio mode 22 output");
	exec("gpio mode 25 output");

	exec("gpio write 21 0");
	exec("gpio write 22 0");
	exec("gpio write 25 0");

	endif
?>




<br>
<hr>
<p><em>Created by <a href="mailto:jiacai_wang@qq.com">wjc</a>.</em></p>
</body>
</html>
