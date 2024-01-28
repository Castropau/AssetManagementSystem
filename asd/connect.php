<?php
	$conn = new mysqli("localhost", "root", "", "asset") or die(mysqli_error());
	if(mysqli_connect_errno())
	{
		echo 'Database Connection Error';
	}
