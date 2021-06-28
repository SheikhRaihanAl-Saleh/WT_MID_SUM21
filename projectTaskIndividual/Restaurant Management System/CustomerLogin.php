<?php
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
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
	} 
?>
<html>
    <head><title>Customer Login</title></head>
    <body>
	    <p align="center"><img src="log.png" width="150px" height="150px"</p>
        <fieldset>
		   <h1 align="center">Customer Login</h1>
		    <form action="Menu.php" method="post">
			    <table align="center">
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
						<td align="center"colspan="2"><br><br><input type="submit" value="Login"><br>
						</br><b>Forgot Password?</b> <a href ="C_forgotpass.php" >Click here</a></td>
					</tr>
					<tr>
					<td align="center" colspan="3"><br><b>Want to Update Your profile? Click on</b> <a href ="UpdateCustomerProfile.php" >Update</a></td>
					</tr>
					<tr>
					    <td align= "center" colspan="3" rowspan="3"><br><br><b>Don't Have an Account Yet?</b> <a href ="Customer.php" >Register Now.</a></td>
					</tr>
				</table>
		 	</form>
		</fieldset>
    </body>
</html>