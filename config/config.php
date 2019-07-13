<?php
session_start();


// rubah data di bawah ini sessuai phpmyadmin
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'aplikasi_pemilihan_bem';
// end

function base_url($url = null ) {
	$base_url = "http://localhost/aplikasi_pemilihan_BEM/";
	if ($url != null ) {
		return $base_url."/".$url;
	} else  {
			return $base_url;
	}
}
