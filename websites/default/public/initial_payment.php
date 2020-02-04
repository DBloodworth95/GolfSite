<html>
	<head>
		<style>
			table, th, td
			{
				border: 1px solid black;
				border-collapse: collapse;
			}
			
			th, td
			{
				padding: 5px;
			}
		</style>
	</head>		
	<body bgcolor="#80CC99">
		<font face="Tahoma" color="#000000">
			<h1 align="center">Payment Page</h1>
			<p></p>
			<form method="post" action="initial_payment2.php" name=BaseForm>
				<table align="center">
					<col width="180">
					<col width="180">
					<tr>
						<td>
							<font face="Tahoma" color="#000000">ORDERID</font>
						</td>
						<td>
							<input type="text" name="ORDERID" value="<?php echo uniqid() ?>">
						</td>
					</tr>
							
					<tr>
						<td>
							<font face="Tahoma" color="#000000">PSPID</font>
						</td>
						<td>
							<input type="text" name="PSPID" value="UoN2020Grp3" contenteditable="false">
						</td>
					</tr>
					
					<tr>
						<td>
							<font face="Tahoma" color="#000000">Language</font>
						</td>
						<td>
							<input type="text" name="LANGUAGE" value="en_US" >
						</td>
					</tr>
							
					<tr>
						<td>
							<font face="Tahoma" color="#000000">Amount</font>
						</td>
						<td>
							<input type="text" name="AMOUNT" value="<?php echo $_POST['AMOUNT']?>"/>
						</td>
					</tr>
					
					<tr>
						<td>
							<font face="Tahoma" color="#000000">Currency</font>
						</td>
						<td>
							<input type="text" name="CURRENCY" value="GBP">
						</td>
					</tr>
					
					<tr>
						<td>
							<font face="Tahoma" color="#000000">SHA IN</font>
						</td>
						<td>
							<input type="text" name="SHAIN" value="d18f95c0-320b-4034-a00e-7a5ee5e1638b" contenteditable="false">
						</td>
					</tr>
					
							<input type="hidden" name="SHASIGN" value="<?php echo $SHASIGN; ?>">
							
					<tr>
						<td align="center">
							<input type="submit" name="SUBMIT" value="Pay up!" style="background-color:#FFFFFF; height:30; width:150">
						</td>
						<td align="center">
							<input type="button" value="Clear the field!" style="background-color:#FFFFFF; height:30; width:150" onclick="resetFunction()">
						</td>
					</tr>	
				</table>
			</form>
		</font>
	</body>
</html>