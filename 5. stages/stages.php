<?php 
    // Creating a connection
    $conn=new mysqli("localhost", "root", "", "dbexitfest");
    // Connection check
    if($conn->connect_error){
        die("Conection failed: " . $conn->connect_error . "<br>");
    }
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylingstages2.css">
    </head>
    <body>
        <div id="header">
            <a href="\PROJEKAT-WEBSITE\1. home\Home.php"><h2><b>EXIT</h2></b></a>
            <a href="stages.html" class="paint"><h2>Stages</h2></a>
        </div>
        <?php
            // Creating a sql query
            $query="SELECT * FROM stages";
            // Exectute sql query
            $result=$conn->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_array()) {
                    $id=$row['id'];
                    $fileHeading=$row['name'];
                    $txtfileName=$row['txtfile'];
                    $fileContents=file_get_contents("$txtfileName");
                    $imgfileName=$row['imgfile'];
                    $logofileName=$row['logofile'];
                    if($id==$_GET['id']) {
        ?>
                        <div class="contents">
                            <img src="<?php echo $imgfileName; ?>" id="img" />
                            <img src="<?php echo $logofileName; ?>" id="svg" />
                            <h1 id="heading"><?php echo $fileHeading ?></h1>
                            <hr>
                            <p id="paragraph"><?php echo $fileContents?></p>
                        </div>
        <?php
                        break;
                    }
                }
            }

        ?>
    </body>
</html>