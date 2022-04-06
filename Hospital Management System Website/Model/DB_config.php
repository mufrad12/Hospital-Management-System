<?php

	function getConnection(){
		
		$conn=oci_connect("Mufrad","mufrad","localhost/XE");
		return $conn;
	}
?>