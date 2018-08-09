#!/bin/bash

/home/pi/livego >>livego.log 2>&1 &
ffmpeg -re -f s16le -i /dev/zero -f v4l2 -framerate 8 -codec:v h264 -s 1280x720 -i /dev/video0 -codec:v copy -codec:a aac -ab 0.1k -f flv -rtmp_live live -rtmp_buffer 200 rtmp:localhost/live/movie >>ffmpeg.log 2>&1 &

