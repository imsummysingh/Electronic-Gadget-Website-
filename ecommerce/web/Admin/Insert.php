<?php
	include("Database.php");
?>

<html>	
	<head>	
		<title> Deeeeep </title>
	</head>
	
	<body>
		<form action="Insert.php" method="post" enctype="multipart/form-data">
		<table width="700" align="center" border="1">
			<tr>
				<td colspan="2" style="text-align:center;"><h1> Insert New College </h1></td>
			</tr>
			<tr>
				<td align="right"><b> College Name </b></td>
				<td><input type="text" name="College_Name" size="50"></td>
			</tr>
			<tr>
				<td align="right"><b> City </b></td>
				<td>
				<select name="College_City">
					<option> Select City </option>
					<?php
						$Get_City = "select * from City";
						$Run_City = mysqli_query($con, $Get_City);
						
						while($Row_City = mysqli_fetch_array($Run_City))
						{
							$City_Name = $Row_City['City_Name'];
							echo "<option value='$City_Name'> $City_Name </option>";
						}
					?>
				</select>	
				</td>
			</tr>
			<tr>
				<td align="right"><b> State </b></td>
			<td>
				<select name="College_State">
					<option> Select State </option>
					<?php
						$Get_State = "select * from State";
						$Run_State = mysqli_query($con, $Get_State);
						
						while($Row_State = mysqli_fetch_array($Run_State))
						{
							$State_Name = $Row_State['State_Name'];
							echo "<option value='$State_Name'> $State_Name </option>";
						}
					?>
				</select>	
				</td>
			</tr>
			<tr>
				<td align="right"><b> Category </b></td>
				<td>
				<select name="College_Category">
					<option> Select Category </option>
					<?php
						$Get_Cat = "select * from Category";
						$Run_Cat = mysqli_query($con, $Get_Cat);
						
						while($Row_Cat = mysqli_fetch_array($Run_Cat))
						{
							$Category_Type = $Row_Cat['Category_Type'];
							echo "<option value='$City_NameCategory_Type'> $Category_Type </option>";
						}
					?>
				</select>	
				</td>
			</tr>
			<tr>
				<td align="right"><b> College Fees </b></td>
				<td><input type="text" name="Fees"></td>
			</tr>
			<tr>
				<td align="right"><b> About </b></td>
				<td><textarea name="About" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center;"><input type="submit" name="Insert" value="Insert"></td>
			</tr>
		</table>
		</form>
</body>
</html>	

<?php
	if(isset($_POST['Insert']))
	{
		$College_Name = $_POST['College_Name'];
		$College_City = $_POST['College_City'];
		$College_State = $_POST['College_State'];
		$College_Category = $_POST['College_Category'];
		$Fees = $_POST['Fees'];
		$About = $_POST['About'];
		
		if($College_Name =='' OR $College_City =='' OR $College_State =='' OR $College_Category =='' OR $Fees =='' OR $About =='')
		{
			echo"<script>alert('Please Fill All The Fields')</script>";
			exit();
		}
		else
		{
			$Insert = "insert into Colleges(College_Name, College_City, College_State, College_Category, Fees, About)
					values ('$College_Name','$College_City','College_State','$College_Caegory','$Fees','$About')";
			$Run_Collleges = mysqli_query($con, $Insert);
			if($Run_Collleges)
			{
				echo"<script> alert('College Inserted Successfully') </script>";
			}
		}	
	}
?>