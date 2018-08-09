# PiCamCar
一个带有摄像头的简单远控小车。

  ffmpeg采集摄像头画面并推流到本地rtmp，

  livego监听本地rtmp并转为http-flv视频流，

  web页面用flv.js播放http-flv，调用php页面执行GPIO操作，完成小车控制。

## Usage
- 自行编译安装ffmpeg,wiringpi
- 运行 `sudo modprobe bcm2835-v4l2`解决摄像头驱动 
- <a href="https://github.com/gwuhaolin/livego/releases">点此</a>下载对应版本的livego
- 运行sh目录下的 `openCam.sh`
- 更改car.php文件第64行的url为livego的flv路径（具体请参考[这里](https://github.com/gwuhaolin/livego/blob/master/README.md)）
- 访问car.php页面应该就可以了吧
- 完了记得执行 `closeCam.sh`关掉摄像头
</ol>


用到的开源项目：<a href="https://github.com/Bilibili/flv.js">flv.js</a>、<a href="https://github.com/gwuhaolin/livego">livego</a>、<a href="https://ffmpeg.org/">FFmpeg</a>、<a href="http://wiringpi.com/">Wiring Pi</a>。感谢大佬们。
