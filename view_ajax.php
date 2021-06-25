<?php
	include 'config.php';
	$sql = "SELECT * FROM covid ORDER BY id DESC"; 
	$result = $link->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['name'];?></td>
			<td><?=$row['aadhar'];?></td>
			<td><?=$row['profession'];?></td>
			<td><?=$row['estatus'];?></td>
			<td><?=$row['dod'];?></td>
			<td><?=$row['sreasion'];?></td>
			<td><?=$row['ereasion'];?></td>
			
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($link);
?>