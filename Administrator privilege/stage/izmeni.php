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
        <?php
            include 'Bina_db.php';
            $bine=new Bina();
            $podaci=$bine->uzmi_podatke_o_bini($_GET["id"]);
            if(!isset($_GET["name"])) {
        ?>
        <form id="forma" action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            name: <input type="text" id="name" name="name" size="20" value="<?php echo $podaci['name']?>"><br>
            imgfile: <input type="text" id="imgfile" name="imgfile" size="20" value="<?php echo $podaci['imgfile']?>"><br>
            txtfile: <input type="text" id="txtfile" name="txtfile" size="20" value="<?php echo $podaci['txtfile']?>"><br>
            logofile: <input type="text" id="logofile" name="logofile" size="20" value="<?php echo $podaci['logofile']?>"><br>

            <input type="button" value="Update" onclick="validacija_submit();">
        </form>
        <?php
            }
            if(isset($_GET['name'])) {
                $name=$_GET["name"];
                $imgfile=$_GET["imgfile"];
                $txtfile=$_GET["txtfile"];
                $logofile=$_GET["logofile"];
                if($bine->izmeni($_GET["id"], $name, $imgfile, $txtfile, $logofile))
                    echo "<p><strong>Bina uspesno izmenjena!</strong></p>";
                else
                    echo "<p><strong>Bina nije uspesno izmenjena!</strong></p>";
            }
        ?>
        <a href="index.php">Indeks bine</a>
    </body>
</html>