<?php
	require_once('DB_config.php');
	
	function validate($email, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM admin WHERE a_email='{$email}' and a_password='{$password}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
		$user = oci_fetch($result);
		
		if(oci_num_rows($result) > 0 ){
			return $user;
		}else{
			return false;
		}
	}

	function insertAdmin($id ,$name,$email, $mob ,$hiredate, $password){
		
		$conn = getConnection();
		$sql = "INSERT INTO admin VALUES ($id,'$name', '$email',
		'$mob',to_date('25-2-2021','dd-mm-yyyy'), '$password')";

		// $sql2 = "INSERT INTO admin VALUES (8, 'admin8', 'a8@gmail.com', '123456', to_date('22-2-1981','dd-mm-yyyy'), 'a111')";

		$result = oci_parse($conn, $sql);

		oci_execute($result);
		
	}

	
	


?>