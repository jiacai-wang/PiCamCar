# PiCamCar
一个带有摄像头的简单远控小车。
ffmpeg采集摄像头画面并推流到本地rtmp，
livego监听本地rtmp并转为http-flv视频流，
web页面用flv.js播放http-flv，调用php页面执行GPIO操作，完成小车控制。
## Usage
自行编译安装ffmpeg
用到的开源项目：<a href="https://github.com/Bilibili/flv.js">flv.js</a>、<a href="https://github.com/gwuhaolin/livego">livego</a>、<a href="https://ffmpeg.org/">FFmpeg</a>、<a href="http://wiringpi.com/">Wiring Pi</a>。感谢大佬们。
