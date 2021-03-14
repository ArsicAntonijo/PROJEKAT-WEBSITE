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
        <?php
            include 'Pravilo_db.php';
            $pravila=new Pravilo();
            $podaci=$pravila->uzmi_podatke_o_pravilu($_GET["id"]);
            if(!isset($_GET["name"])) {
        ?>
        <form id="forma" action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            name: <input type="text" id="name" name="name" size="20" value="<?php echo $podaci['name']?>"><br>
            file: <input type="text" id="file" name="file" size="20" value="<?php echo $podaci['file']?>"><br>
            <input type="button" value="Update" onclick="validacija_submit();">
        </form>
        <?php
            }
            if(isset($_GET['name'])) {
                $name=$_GET["name"];
                $file=$_GET["file"];
                if($pravila->izmeni($_GET["id"], $name, $file))
                    echo "<p><strong>Pravilo uspesno izmenjeno!</strong></p>";
                else
                    echo "<p><strong>Pravilo nije uspesno izmenjeno!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks pravila</a>
    </body>
</html>