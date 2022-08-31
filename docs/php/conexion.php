<?php
	$hostname_ = "localhost";
	$database_ = "c2141624_enlace";
	$username_ = "c2141624_enlace";
	$password_ = "kela99ROzu";
	$conexion  = mysqli_connect($hostname_, $username_, $password_, $database_) or trigger_error(mysqli_error(),E_USER_ERROR);
	mysqli_set_charset($conexion, 'utf8');

