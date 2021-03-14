<?php
    include 'DBController.php';
    // Creating a connection
    $db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="stylinggallery.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <!-- Google Navigation Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="gridview">
            <!-- Creating a navbar -->
            <div class="topnav" id="myTopnav">
            <a href="\PROJEKAT - WEBSITE\1. home\Home.php" class="active"><b>EXIT</b></a>
            <a href="gallery.php?id=1">2017</a>
            <a href="gallery.php?id=2">2018</a>
            <a href="gallery.php?id=3">2019</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            </div>
            <script>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
            </script>
            <div style="margin: 80px;"></div>
            <!-- Creating a gallery -->
            <?php
                // Creating a sql query
                $query = $db_handle->runQuery("SELECT * FROM images2017 ORDER BY id ASC");  //DEFAULT 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="1"){
                        $query = $db_handle->runQuery("SELECT * FROM images2017 ORDER BY id ASC");
                    } elseif($id=="2"){
                        $query = $db_handle->runQuery("SELECT * FROM images2018 ORDER BY id ASC");
                    } else{
                        $query = $db_handle->runQuery("SELECT * FROM images2019 ORDER BY id ASC");
                    }
                }
                //
                if (! empty($query)) {
                    foreach ($query as $key => $value) {
            ?>  
                        <div class="image">
                    <?php 
                        if(file_exists($query[$key]["path"])){ 
                    ?>
                            <img src="<?php echo $query[$key]["path"]; ?>" />
                    <?php 
                        } 
                        else{ 
                    ?>
                            <img src="gallery/default.jpg" />
                    <?php
                        }
                    ?>
                        </div>
            <?php
                }
            }
            ?>
        </div>
    </body>
</html>