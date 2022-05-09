#!/bin/bash

# 后台执行livego
/home/pi/livego >>livego.log 2>&1 &

# 等待livego启动完毕
sleep 3

# 获取推流key
key=$(curl http://localhost:8090/control/get?room=movie -s |sed 's/"/ /g'|awk '{print $6}')

# 推流
ffmpeg -re -f s16le -i /dev/zero -f v4l2 -framerate 8 -codec:v h264 -s 1280x720 -i /dev/video0 -codec:v copy -codec:a aac -ab 0.1k -f flv -rtmp_live live -rtmp_buffer 200 rtmp:localhost:1935/live/${key} >>ffmpeg.log 2>&1 &

