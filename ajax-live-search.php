<?php
require ('config.php');
$return = '';
if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($link, $_POST["search"]);
	$query = "SELECT * FROM covid
	WHERE id  LIKE '%".$search."%'
	OR name LIKE '%".$search."%'
    OR aadhar LIKE '%".$search."%'
	OR profession LIKE '%".$search."%'
	OR estatus LIKE '%".$search."%'
    OR sreasion LIKE '%".$search."%'	
	OR profession LIKE '%".$search."%'    ";

					$result = mysqli_query($link, $query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row1 = mysqli_fetch_array($result))
						{
							$return .= '
							<tr>
							<td>'.$row1["name"].'</td>
							<td>'.$row1["aadhar"].'</td>
							<td>'.$row1["profession"].'</td>
							<td>'.$row1["estatus"].'</td>
							<td>'.$row1["dod"].'</td>
							<td>'.$row1["sreasion"].'</td>
							<td>'.$row1["ereasion"].'</td>
							</tr>';
						}
						echo $return;
						}
					else
					{
						echo 'No results containing all your search terms were found.';
}
}
?>