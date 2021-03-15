<?php
    include 'DBController.php';
    // Creating a connection
    $db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="stylinglineupgallery.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <!-- Google Navigation Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="gridview">
            <!-- Creating a navbar -->
            <div class="topnav" id="myTopnav">
            <a href="\PROJEKAT-WEBSITE\1. home\Home.php" class="active"><b>EXIT</b></a>
            <a href="lineupgallery.php?id=1">2018</a>
            <a href="lineupgallery.php?id=2">2019</a>
            <a href="lineupgallery.php?id=3">2020</a>
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
            
            <div style="margin: 70px;"></div>
            <div class="link" style="margin: 20px">
                <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        if($id=="1"){
                            ?>
                            <p style="text-font:18;text-align:right;padding:15px;"><b><a href="/PROJEKAT-WEBSITE/8.%20lineup/lineup1.html">See full cast</a></b></p>
                            <?php
                        } elseif($id=="2"){
                            ?>
                            <p style="text-align:right;padding:15px;"><b><a href="/PROJEKAT-WEBSITE/8.%20lineup/lineup2.html">See full cast</a></b></p>
                            <?php
                        } else{
                            ?>
                            <p style="text-align:right;padding:15px;"><b><a href="/PROJEKAT-WEBSITE/8.%20lineup/lineup3.html">See full cast</a></b></p>
                            <?php
                        }
                    }
                    else {?>
                        <p style="text-align:right;padding:15px;"><b><a href="/PROJEKAT-WEBSITE/8.%20lineup/lineup3.html">See full cast</a></b></p>
                   <?php }
                    ?>
            </div>
            <div  style="margin: 20px;"></div>
            <!-- Creating a gallery -->
            <?php
                // Creating a sql query
                $query = $db_handle->runQuery("SELECT * FROM lineup2020 ORDER BY id ASC");  //DEFAULT 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="1"){
                        $query = $db_handle->runQuery("SELECT * FROM lineup2018 ORDER BY id ASC");
                    } elseif($id=="2"){
                        $query = $db_handle->runQuery("SELECT * FROM lineup2019 ORDER BY id ASC");
                    } else{
                        $query = $db_handle->runQuery("SELECT * FROM lineup2020 ORDER BY id ASC");
                    }
                }
                //
                if (! empty($query)) {
                    $provera=0;
                    foreach ($query as $key => $value) {
                        switch($provera){
                            case 0:
                                $query1=$query;
                                $key1=$key;
                                $provera++;
                                break;
                            case 1:
                                $query2=$query;
                                $key2=$key;
                                $provera++;
                                break;
                            default:
                          
                            if(file_exists($query1[$key1]["path"])){ 
                        ?>
                                <div class="image">
                                <a href="<?php echo $query[$key]["path"]; ?>" target="_blank">
                                <img src="<?php echo $query1[$key1]["path"]; ?>" /> </a>
                                <p id="nazivbenda"><a href="<?php echo $query2[$key2]["path"]; ?>"><?php echo $query2[$key2]["name"]; ?> </a> </p>                                  
                        <?php 
                            } 
                            else{ 
                        ?>
                                <img src="gallery/default.jpg" />
                        <?php
                            }
                            $provera=0;
                        ?>

                            </div>
                <?php
                        }
                }
            }
            ?>
        </div>
    </body>
</html>