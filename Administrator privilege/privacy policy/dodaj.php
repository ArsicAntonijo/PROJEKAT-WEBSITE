<!DOCTYPE html>
<html>
    <head>
        <script>
            function validacija_submit() {
                name=document.getElementById("name").value;
                file=document.getElementById("file").value;
                forma=document.getElementById("forma");
                if(name=="" || file=="") {
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
            file: <input type="text" id="file" name="file" size="30"><br>
            <input type="button" value="Add" onclick="validacija_submit();">
        </form>
        <?php
            include 'Pravilo_db.php';
            if(isset($_GET["name"])) {
                $name=$_GET["name"];
                $file=$_GET["file"];
                $pravila=new Pravilo();
                if($pravila->dodaj($name, $file))
                    echo "<p><strong>Pravilo uspesno dodato!</strong></p>";
                else
                    echo "<p><strong>Pravilo nije uspesno dodato!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks pravila</a>
    </body>
</html>