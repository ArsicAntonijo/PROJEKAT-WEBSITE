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
            include 'Slika_db.php';
            $slike=new Slika();
            $podaci=$slike->uzmi_podatke_o_slici($_GET["id"]);
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
                if($slike->izmeni($_GET["id"], $name, $path))
                    echo "<p><strong>Slika uspesno izmenjena!</strong></p>";
                else
                    echo "<p><strong>Slika nije uspesno izmenjena!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks slike</a>
    </body>
</html>