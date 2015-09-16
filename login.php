<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$phone_error = "";
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin et e-post ei ole tühi
		if ( empty($_POST["name"]) ) {
			$name_error = "See väli on kohustuslik";
		}
		
			if ( empty($_POST["phone"]) ) {
			$phone_error = "See väli on kohustuslik";
			
		} else { 
		if(is_numeric($_POST["phone"])){}
			
		else{
			$phone_error = "siin peab olema number";
			}
		}
		
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		}
		
		//kontrollin, et parool ei ole tühi
		if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			// kui oleme siia jõudnud, siis parool ei ole tühi
			// kontrollin, et oleks vähemalt 8 sümbolit pikk
			if(strlen($_POST["password"]) < 8) { 
			
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
				
			}
			
		}
		
	}
	
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?>
			<br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> 
			<br><br>
			<input type="submit" value="Log in">
		</form><br>
	<a href="?create_user">Create User</a>
	
		<h2>Create User</h2>
		<form action="login.php">
		
			<input type="text" name="name" id="name" placeholder="Taisnimi"><?php echo $name_error; ?>
			<br><br>
			<input type="tel" name="phone" id="phone" placeholder="Telefoni nr."><?php echo $phone_error; ?>
			<br><br>
			<input type="text" name="age" id="age" placeholder="vanus">
			<br><br>
			<input type="text" name="playage" id="playage" placeholder="Mangu aastaid" >
			<br><br>
			<input type="email" name="email" id="email" placeholder="E-post"> <?php echo $email_error; ?>
			<br><br>
			<input type="password" name="password" id="password" placeholder="Parool" > <?php echo $password_error; ?> 
			<br><br>
			
			<input type="submit" value="Sign up">
		</form>
	<text>
	Tahan teha lehe mis aitaks kokku viima erinevaid priþi mängijaid.
	</text>
	
</body>
</html>