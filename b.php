<?php
	exec("gpio write 22 1");
	exec("sleep 0.15");
	exec("gpio write 22 0");
?>
