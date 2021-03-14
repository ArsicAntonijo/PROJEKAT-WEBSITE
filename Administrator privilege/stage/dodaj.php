<!DOCTYPE html>
<html>
    <head>
        <script>
        function validacija_submit() {
                name=document.getElementById("name").value;
                imgfile=document.getElementById("imgfile").value;
                txtfile=document.getElementById("txtfile").value;
                logofile=document.getElementById("logofile").value;
                forma=document.getElementById("forma");
                if(name=="" || imgfile=="" || txtfile=="" || logofile=="") {
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
            imgfile: <input type="text" id="imgfile" name="imgfile" size="20"><br>
            txtfile: <input type="text" id="txtfile" name="txtfile" size="20"><br>
            logofile: <input type="text" id="logofile" name="logofile" size="20"><br>
            <input type="button" value="Add" onclick="validacija_submit();">
        </form>
        <?php
            include 'Bina_db.php';
            if(isset($_GET["name"])) {
                $name=$_GET["name"];
                $imgfile=$_GET["imgfile"];
                $txtfile=$_GET["txtfile"];
                $logofile=$_GET["logofile"];
                $bine=new Bina();
                if($bine->dodaj($name, $imgfile, $txtfile, $logofile))
                    echo "<p><strong>Bina uspesno dodata!</strong></p>";
                else
                    echo "<p><strong>Bina nije uspesno dodata!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks bine</a>
    </body>
</html>