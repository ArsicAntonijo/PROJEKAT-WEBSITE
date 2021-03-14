<!DOCTYPE html>
<html>
    <head>
        <script>
            function validacija_submit() {
                name=document.getElementById("name").value;
                path=document.getElementById("path").value;
                forma=document.getElementById("forma");
                if(name=="" || path=="") {
                    alert("Nije uneto zahtevano polje!");
                    return false;
                }
                forma.submit();
            }
        </script>
    </head>
    <body>
        <form id="forma" action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            name: <input type="text" id="name" name="name" size="20"><br>
            path: <input type="text" id="path" name="path" size="30"><br>
            <input type="button" value="Add" onclick="validacija_submit();">
        </form>
        <?php
            include 'Lineup_db.php';
            if(isset($_GET["name"])) {
                $name=$_GET["name"];
                $path=$_GET["path"];
                $lineup=new Lineup();
                if($lineup->dodaj($name, $path))
                    echo "<p><strong>Lineup uspesno dodat!</strong></p>";
                else
                    echo "<p><strong>Lineup nije uspesno dodat!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks lineup</a>
    </body>
</html>