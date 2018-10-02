<?php

class SecurityController extends Security{
	public function destroy(){
		session_unset();
		session_destroy();
		session_start();
		session_regenerate_id(true);
		header('location:?c=Index&m=index');
		exit();
	}
}
