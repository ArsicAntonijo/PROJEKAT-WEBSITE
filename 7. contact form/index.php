<?php 
 session_start();
	$info = "";
	$email = "";
	echo $info;
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		$info = $_SESSION["userInfo"];
		$email = $_SESSION["email"];
	}
 
 ?>
<!-- No mail is sent because the server is localhost, it is not on the internet!!! -->
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="heading">
            <a href="\PROJEKAT - WEBSITE\1. home\Home.php"><h1><b>EXIT</h1></b></a>
            <a href="#" class="paint"><h1>Contact</h1></a>
        </div><br><br><br><br>
        <div class="contact-title">
            <h1>Say Hello</h1>
            <h2>We are always ready to serve you!</h2>
        </div>
        <div class="contact-form">
            <form id="contact-form" method="post" action="contact-form-handler.php">
                <input name="name" type="text" value="<?php echo $info; ?>" class="form-control" placeholder="Your Name" required><br>
                <input name="email" type="email"  value="<?php echo $email; ?>" class="form-control" placeholder="Your Email" required><br>
                <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>
                <input type="submit" class="form-control submit" value="SEND MESSAGE">
            </form>
        </div>
    </body>
</html>