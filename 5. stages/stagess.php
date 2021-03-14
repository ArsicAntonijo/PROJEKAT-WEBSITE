<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylingstages.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--Kreiranje navbar-a-->
        <div class="topnav">
            <a href="\PROJEKAT - WEBSITE\1. home\home.php" class="active"><b>EXIT</b></a>
            <div id="myLinks">
                <a href="stages.php?id=1">MAIN STAGE</a>
                <a href="stages.php?id=2">DANCE ARENA STAGE</a>
                <a href="stages.php?id=3">ADDIKO FUSION STAGE</a>
                <a href="stages.php?id=4">EXPLOSIVE STAGE</a>
                <a href="stages.php?id=5">NSNS STAGE</a>
                <a href="stages.php?id=6">COCKTA BEATS STAGE</a>
                <a href="stages.php?id=7">X-BASS PIT STAGE</a>
                <a href="stages.php?id=8">WWPR STAGE</a>
                <a href="stages.php?id=9">GAIA TRANCE STAGE</a>
                <a href="stages.php?id=10">AQUA VIVA LATION STAGE</a>
                <a href="stages.php?id=11">URBAN BUG STAGE</a>
                <a href="stages.php?id=12">AS FM STAGE</a>
                <a href="stages.php?id=13">SILENT DISCO STAGE</a>
                <a href="stages.php?id=14">CHIPSY DISCO STAGE</a>
                <a href="stages.php?id=15">PWCI STAGE</a>
                <a href="stages.php?id=16">CRAFT STEET STAGE</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
            function myFunction(){
                var x = document.getElementById("myLinks");
                if(x.style.display === "block") {
                    x.style.display = "none";
                } else{
                    x.style.display = "block";
                }
            }
        </script>

        <img src="exit-bine-hero.jpg" class="responsiveimg">

        <p style="color: white; text-align: center;">
            On more than 40 stages and zones hidden between the walls of Petrovaradin Fortress 
            EXIT Festival brings performances by top music acts and a variety of genres.
        </p>

    </body>
</html>