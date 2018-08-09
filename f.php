<?php
	exec("gpio write 21 1");
	exec("sleep 0.2");
	exec("gpio write 21 0");
?>
