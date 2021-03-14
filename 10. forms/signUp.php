<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylingSignUp.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
	body{
		//background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
		background-color: #DCDCDC;
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		font-family: 'Numans', sans-serif;
	}

	.modal .modal-dialog {
		max-width: 400px;
		z-index: 9999;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
		font-size: 14px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
	.modal .modal-title {
		display: inline-block;
	}
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
	#link {
		text-decoration: none;
		
		margin-right: 10px;
	}
	
	#greska {
		color: red;
		margin-left: 45px;
	}

</style>
	
</head>
<body>
  <?php
  // creating link to database ------------------------
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "dbexitfest";

  $conn = new mysqli($host,$user,$password,$database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //--------------------------------------------------

  // define variables and set to empty values
  $name = $surname = $email = $pass = "";
  $nameErr = $emailErr = $surnameErr = $passErr = "";


// accepting info for new users--------------------
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = " * Name is required";
    } else{
		if(!preg_match("/^[a-zA-Z]*$/",$name)){
			$nameErr = " * Only letters allowed";
		} else {	
			$name = test_input($_POST["name"]);
		}		
    }
    if (empty($_POST["surname"])) {
      $surnameErr = " * Last name is required";
    } else {
		if(!preg_match("/^[a-zA-Z]*$/",$surname)){
			$surnameErr = " * Only letters allowed";
		} else {
			$surname = test_input($_POST["surname"]);
		}
    }
    if (empty($_POST["email"])) {
      $emailErr = " * Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      } else {
        $email = test_input($_POST["email"]);
      }
    }
    if (empty($_POST["pass"])) {
      $passErr = " * Pasword is required";
	  
    } else {
      // check if pasword is strong 
		if (strlen($_POST["pass"])<4) {
		  $passErr = "* weak pasword";
		} else {    
		  $pass = test_input($_POST["pass"]);
		}
    }
  }
  //-----------------------------------------

  if($name != "" && $surname != "" && $email && $pass != 0){
	  //checking if entered info already exist
	  $sql = "SELECT name, lastname, email, password FROM users where email = '". $email."'";
	  $result = $conn->query($sql);
	  if ($result->num_rows > 0) {
		$emailErr = "* email already taken";
	  } else {
		$sql = "INSERT INTO users ( name, lastname, email, password)
			VALUES ('$name', '$surname', '$email', '$pass')";

		  //checks if data has been added successfully
		  if ($conn->query($sql) === TRUE) {
			echo "<script> alert(\"Uspesno upisano!\"); </script>";
			header('Location: logIn.php');
		  } else {
			echo "<script> alert(\"Doslo je do greske!\"); </script>";
		  }
	  }
  }//------------------------------------
  
  //getting rid of blankspace and slashes
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }//------------------------------------
  ?>

<!-- main  for sing up ............................................ -->
<div id="editEmployeeModal" >
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="modal-header">						
							<h4 class="modal-title">Enter your info:</h4>
							<button type="button" class="close" onclick="povratak()">&times;</button>
						</div>
						<div class="modal-body">								
							<div class="form-group">
								<label>Name</label>
								<span id="greska"><?php echo $nameErr;?></span>
								<input type="text" class="form-control" value="<?php echo $name; ?>" name="name" required>
							</div>
							<div class="form-group">
								<label>Surname</label>
								<span id="greska"><?php echo $surnameErr;?></span>
								<input type="text" class="form-control" value="<?php echo $surname; ?>" name="surname" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<span id="greska"><?php echo $emailErr;?></span>
								<input type="email" class="form-control" value="<?php echo $email; ?>" name="email" required>
							</div>	
							<div class="form-group">
								<label>Password</label>
								<span id="greska"><?php echo $passErr;?></span>
								<input type="text" class="form-control" value="<?php echo $pass; ?>" name="pass" required>
							</div>	
						</div>
						<div class="modal-footer">
							<a href="/PROJEKAT%20-%20WEBSITE/1.%20home/Home.php" id="link">Return</a>
							<input type="submit" class="btn btn-info" value="Sign up">
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
<!-- ...................... ............................................ -->

<script>
	function povratak() {
		window.location="/PROJEKAT%20-%20WEBSITE/1.%20home/Home.php";
	}	
</script>
 
<?php
 $conn->close();
?>
</body>
</html>
