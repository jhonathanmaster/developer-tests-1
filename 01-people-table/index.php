<?php

// Place code here
$people = [
   ['id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'],
   ['id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'],
   ['id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'],
   ['id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'],
   ['id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com'],
];

?>
<table width="100%">
	<tr>
		<td><b>ID</b></td>
		<td><b>FIRST NAME</b></td>
		<td><b>LAST NAME</b></td>
		<td><b>EMAIL</b></td>
		<td></td>
	</tr>
<?php
// printing all users
	foreach ($people as $row) 
	{
		$id = $row['first_name'];
		$email = $row['email'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		echo '
			<tr>
				<td> ' .$id.' </td>
				<td> ' .$first_name. ' </td>
				<td> ' .$last_name. ' </td>
				<td> ' .$email. ' </td>
				<td><input type="button" value="Submit!" onclick="alert(\'** '.$id.' **\'+ \'  \' + \' ** '.$email.' **\')" /></td>
			</tr>';
	}
?>
</table>