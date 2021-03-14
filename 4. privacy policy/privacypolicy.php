<?php
    // Creating a connection
    $conn=new mysqli("localhost", "root", "", "dbexitfest");
    // Connection check
    if($conn->connect_error){
        die("Conection failed: " . $conn->connect_error);
    }        
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylingpp.css">
    </head>
    <body>
        <div id="heading">
            <a href="\PROJEKAT - WEBSITE\1. home\Home.php"><h1><b>EXIT</h1></b></a>
            <a href="#" class="paint"><h1>Privacy Policy</h1></a>
        </div>
        <br><br><br>
        <?php 
            // Creating a sql query
            $query="SELECT * FROM privacy_policy";
            // Execute sql querie
            $result=$conn->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_array()){
                    $fileName = $row['file'];
                    $fileHeading = $row['name'];
                    $fileContents = file_get_contents("$fileName"); //dobijam sadrzaj file
                ?>
                    <div class="content">
                        <h2><?php echo $fileHeading ?></h2>
                        <p><?php echo $fileContents ?></p>
                    </div>
        <?php
                }  
            }
        ?>
    </body>
</html>