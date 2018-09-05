<?php
class securityController extends security{
	public function destroy(){
		session_destroy();
		header('location:?c=index&m=inicio');
	}
}

?>