<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$prof="";
	$err_prof="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	
	$hasError=false;
	
	$professions = array("Student","Teacher","Doctor","Business","Entreprenuer","Housewife");

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="*Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		
		if(!isset($_POST["gender"])){
			$err_gender="*Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["email"])){
			$err_email="*Email Required";
			$hasError = true;
		}
		else if(strlen($_POST["email"]) <=10){
			$err_email="*___@gmail.com";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(!isset($_POST["profession"])){
			$err_prof = "*Must Select Profession";
			$hasError = true;
		}
		else{
			$prof = $_POST["profession"];
		}
		if(!isset($_POST["phone"])){
			$err_phone="*Phone Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=10){
			$err_phone="*Must be a valid phone number";
			$hasError = true;
		}
		else{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["address"])){
			$err_address="*Address Required";
			$hasError = true;
		}
		else{
			$address = $_POST["address"];
		}
		
 if(!$hasError){
	         echo"<b><U>Members Information</u></b><br><br>";
			 echo "Customer Name:  ";
			 echo $name."<br>";
			 echo "UserId:  ";
			 echo $_POST["username"]."<br>";
			 echo "Gender:  ";
			 echo $_POST["gender"]."<br>";
			 echo "Email Address:  ";
			 echo $_POST["email"]."<br>";
			 echo "Profession:   ";
			 echo $_POST["profession"]."<br>";
			 echo "Contact Number:  ";
			 echo $_POST["phone"]."<br>";
			 echo "Address:  ";
			 echo $_POST["address"]."<br>";
			
		}
	}

	
		
	?>

<html>
	<head><title>Membership</title></head>
	<body>
	    <p align="center"><img src="m.png" width="100px" height="100px"></p>
		<h1 align="center">Registration for Membership </h1> 
		<fieldset>
			<center>
			<form action="" method="POST">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" size="30" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" size="30" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> 
						Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					
					<tr>
						<td>Profession:  </td>
						<td>
							<select name="profession">
								<option selected disabled>--Select--</option>
								<?php
									foreach($professions as $pf){
										if($prof == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_prof;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" size="30" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td>Address:  </td>
						<td>
							<textarea name="address"><?php echo $address;?></textarea>
						</td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
		
				</table>
				<br>
				<a align="right"colspan="2"><input type="reset" value="Reset"></a>
				<a align="right"><input type="submit" value="submit"></a>
					
			</form>
			</center>
		</fieldset>
		
	</body>
</html>

