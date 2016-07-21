<?php
function stop_server(){
	$command =  'lsof -ti tcp:5000';
	$process_ids = shell_exec($command);
	if(!empty($process_ids)){
		$pids = explode(' ',$process_ids);
		foreach ($pids as $key => $pid) {
			shell_exec("kill -9 $pid");
		}
	}
}
stop_server();

if(isset($_POST)){
	if(isset($_POST['location'])){
		$command =  '/usr/local/bin/python example.py -a google -u support@webseoservices.in -p niraj456 -l "'.$_POST['location'].'" -st 5 -H 0.0.0.0 -P 5000 > /dev/null 2>&1 & echo $!;';
		$pid = exec($command, $output);
		header("location:index.php?view=map");
		die();
	}

	if(isset($_POST['stop'])){
		stop_server();
		header("location:index.php");
		die();
	}
}