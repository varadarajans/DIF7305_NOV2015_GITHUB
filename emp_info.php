<?php
//make connection
mysql_connect('localhost','root','moni');

//select db
mysql_select_db('employees');
$sql="SELECT * FROM emp_info";
$records=mysql_query($sql);


?>



<html>
<head>
	<title>EMPLOYEE DATA </title>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Father_Name</th>
	<th>DOB</th>
	<th>Designation</th>
	<th>Salary</th>
<tr>

<?php
while($employee=mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$employee['ID']."</td>";
	echo "<td>".$employee['Name']."</td>";
	echo "<td>".$employee['Father_Name']."</td>";
	echo "<td>".$employee['DOB']."</td>";
	echo "<td>".$employee['Designation']."</td>";
	echo "<td>".$employee['Salary']."</td>";
	echo "<tr>";
	
}//end while
?>


</table>
	
</body>
</html>