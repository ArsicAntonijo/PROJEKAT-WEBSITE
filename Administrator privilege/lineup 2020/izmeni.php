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
        <?php
            include 'Lineup_db.php';
            $lineup=new Lineup();
            $podaci=$lineup->uzmi_podatke_o_lineup($_GET["id"]);
            if(!isset($_GET["name"])) {
        ?>
        <form id="forma" action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            name: <input type="text" id="name" name="name" size="20" value="<?php echo $podaci['name']?>"><br>
            path: <input type="text" id="path" name="path" size="20" value="<?php echo $podaci['path']?>"><br>
            <input type="button" value="Update" onclick="validacija_submit();">
        </form>
        <?php
            }
            if(isset($_GET['name'])) {
                $name=$_GET["name"];
                $path=$_GET["path"];
                if($lineup->izmeni($_GET["id"], $name, $path))
                    echo "<p><strong>Lineup uspesno izmenjen!</strong></p>";
                else
                    echo "<p><strong>Lineup nije uspesno izmenjen!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks lineup</a>
    </body>
</html>