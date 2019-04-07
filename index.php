<html>


	<head>
		<title>Information Gathered</title>
	</head>
	
	<body>
		
		<form action="index1.php" method="post">

<table border="0">

<tr>
	<td>Name</td>
	<td align="center"><input type="text" name="username" size="30" /></td>
</tr>

<tr>
	<td>Address</td>
	<td align="center"><input type="text" name="streetaddress" size="30" /></td>
</tr>

<tr>
	<td>City</td>
	<td align="center"><input type="text" name="cityaddress" size="30"  /></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

</table>
</form>

		<?php
		
		echo "<p>Data Processed now </p>";
		
		?>
		
	</body>
	
</html>