
<?php
	include 'config.php';
	
			  $name =  mysqli_real_escape_string($link, $_POST['name']);
			$aadhar =  mysqli_real_escape_string($link, $_POST['aadhar']);
		$profession =  mysqli_real_escape_string($link, $_POST['profession']);
		   $estatus =  mysqli_real_escape_string($link, $_POST['estatus']);
			
			  $date =  mysqli_real_escape_string($link, $_POST['date']);
			
		  $ereasion =  mysqli_real_escape_string($link, $_POST['ereasion']);
		  $sreasion =  mysqli_real_escape_string($link, $_POST['sreasion']);
		  
if($name!="" && $aadhar!="" && $profession!="" && $estatus!="" && $date!="" && $sreasion!=""){
	
		$query = "INSERT INTO `covid`(`name`, `aadhar`, `profession`, `estatus`, `dod`, `sreasion`, `ereasion`) 
		VALUES ('$name', '$aadhar', '$profession', '$estatus', '$date', '$sreasion', '$ereasion')";

			if (mysqli_query($link, $query)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
			mysqli_close($link);
	
}else{
	echo "all field required...";
}
?>
