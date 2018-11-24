<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "1";
	$port = "5432";
	$dbname = "loperman";
	$conn = pg_connect("host=".$host." port=".$port."  dbname=".$dbname." user=".$user." password=".$pass) or  die("Koneksi gagal");
?>