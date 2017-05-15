<?php
	include("config.php");
	
	$sql = "Select * from user";
	$result = mysqli_query($db,$sql);
	 echo "<table>"; 
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			//echo " ID: ".$row['user_id'] . " name: ".$row['user_name']." pass: ".$row['email']. "<br>";*/
			//echo json_encode($row);
			echo "<tr>";
			echo "<td>Name</td>";
			echo "<td>".$row['user_name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "</tr>";
		}
	}    
     
     echo "</table>";

	
?>