<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPassword="";
	$err_confirmPassword="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	
	$hasError=false;

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
		if(empty($_POST["pass"])){
			$err_pass="*Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <=6){
			$err_pass="*Pass Must be greater than 6";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["confirmPassword"])){
			$err_confirmPassword="*Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["confirmPassword"]) <=6){
			$err_confirmPassword="*Pass must be greater than 6";
			$hasError = true;
		}
	    
		else{
			$confirmPassword=$_POST["confirmPassword"];
		}
	    if ($pass != $confirmPassword) {
            $err_confirmPassword = "*Passwords doesn't match";
            $hasError = true;
        }
		else{
			$confirmPassword=$_POST["confirmPassword"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="*Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["email"])){
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
		if(empty($_POST["phone"])){
			$err_phone="*Phone Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=10){
			$err_phone="*Must be 11 digit";
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
	         echo"<b><U>Customer Profile</u></b><br><br>";
			 echo "Customer Name:  ";
			 echo $name."<br>";
			 echo "UserId:  ";
			 echo $_POST["username"]."<br>";
			// echo $_POST["pass"]."<br>";
			 //echo $_POST["confirmPassword"]."<br>";
			 echo "Gender:  ";
			 echo $_POST["gender"]."<br>";
			 echo "Email Address:  ";
			 echo $_POST["email"]."<br>";
			 echo "Contact Number:  ";
			 echo $_POST["phone"]."<br>";
			 echo "Address:  ";
			 echo $_POST["address"]."<br>";
			
		}
	}
	
		
	?>

<html>
	<head><title>Customer Registration</title></head>
	<body>
	
	    <p align="center"><img src="reg.png" width="150px" height="150px"</p>
		<h1 align="center">Customer Registration</h1>
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
						<td>password: </td>
						<td><input type="password" size="30" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td>Confirm password: </td>
						<td><input type="password" size="30" name="confirmPassword" value="<?php echo $confirmPassword;?>" placeholder="Confirm password"></td>
						<td><span><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
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
				<a align="right"colspan="2"><input type="submit" value="Register"></a>
						<a align="right"><input type="reset" value="Reset"></a>
						<br></br>
						<b>Click on</b> <a href ="CustomerLogin.php" >Login.</a>
			</form>
			</center>
		</fieldset>
		
	</body>
</html>

