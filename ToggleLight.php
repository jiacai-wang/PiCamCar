<?php
	$status=exec("gpio read 25");
	if($status==0)
		exec("gpio write 25 1");
	else
		exec("gpio write 25 0");
	echo exec("gpio read 25");
?>
