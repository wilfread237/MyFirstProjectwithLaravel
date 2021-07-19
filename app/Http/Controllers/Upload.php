<?php

class Upload {

	public function __construct() {
		
	}

	public function upload_files($source, $destination) {
		move_uploaded_file($source, $destination);
	}


	public function getExtension($name_file) {
		return '.' . explode('.', $name_file)[1];
	}


	public function rename() {
		return date('dmYHis');
	}

}

?>