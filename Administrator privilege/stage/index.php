<!DOCTYPE html>
<html>
    <head>
        <script>
            function brisi(id_bine) {
                var odgovor=confirm("Brisanje bine: Da li ste sigurni?");
                if(odgovor)
                    window.location="brisi.php?id="+id_bine;
            }
            function izmeni(id_bine) {
                window.location="izmeni.php?id="+id_bine;
            }
        </script>
    </head>
    <body>
        <button type="button" style="width: 30px; height: 30px; color: white; background-color: black;" 
        onclick="window.location.href='../admin_page.html'">X</button><br><br>

        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" id="pretraga" name="pretraga" size="20">
            <input type="submit" value="Search">
        </form>
        <?php
            include 'Bina_db.php'; 
            $bine=new Bina();
            if(!isset($_GET['pretraga'])) {    
                $bine->stampaj_tabelu_bine();
            }
            else {
                $bine->stampaj_tabelu_bine($_GET['pretraga']);
            }
        ?>
        <form action="dodaj.php" method="get">
            <input type="submit" value="Add">
        </form>
    </body>
</html>