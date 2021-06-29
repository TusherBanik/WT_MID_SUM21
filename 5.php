<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$passC="";
	$err_passC="";
	$err_Email="";
	$err_Email="";
	$err_phone="";
	$err_phone="";
	$err_Add="";
	$err_Add="";
	$gender="";
	$err_gender="";
	$about=[];
	$err_about="";
	
		$hasError=false;
	
	$professions = array("Teaching","Service","Business","Entreprenuer");
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td>PasswordConfrom: </td>
						<td><input type="password" name="passwordConfrom" placeholder="Password"></td>
					</tr>
					<tr>
						<td>Emaill: </td>
						<td><input type="Emaill" name="Emaill" placeholder="Emaill"></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="Phone" name="Phone" placeholder="Phone"></td>
					</tr>
					
					<tr>
						<td>Address: </td>
						<td><input type="Address" name="Address" placeholder="Address"></td>
					</tr>
					<tr>
						<td>Where did you hear about us ?:  </td>
						<td>
							<input type="checkbox" value="A friend or colleagus" <?php if(hobbyExist("A friend or colleagus")) echo "checked";?>  name="A friend or colleagus[]"> A friend or colleagus
							<input type="checkbox" value="Google" <?php if(hobbyExist("Google")) echo "checked";?> name="Google[]"> Google<br>
							<input type="checkbox" value="Blog post" <?php if(hobbyExist("Blog post")) echo "checked";?>"Blog post[]"> Blog post
							<input type="checkbox" value="News Article" <?php if(hobbyExist("News Article")) echo "checked";?> name="News Article[]"> News Article
						</td>
						<td><span><?php echo $err_about;?></span></td>
					</tr>

					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					
					
					<tr>
						<td>Bio:  </td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>