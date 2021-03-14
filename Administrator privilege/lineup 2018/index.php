<!DOCTYPE html>
<html>
    <head>
        <script>
            function brisi(id_lineup) {
                var odgovor=confirm("Brisanje lineup: Da li ste sigurni?");
                if(odgovor)
                    window.location="brisi.php?id="+id_lineup;
            }
            function izmeni(id_lineup) {
                window.location="izmeni.php?id="+id_lineup;
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
            include 'Lineup_db.php'; 
            $lineup=new Lineup();
            if(!isset($_GET['pretraga'])) {    
                $lineup->stampaj_tabelu_lineup();
            }
            else {
                $lineup->stampaj_tabelu_lineup($_GET['pretraga']);
            }
        ?>
        <form action="dodaj.php" method="get">
            <input type="submit" value="Add">
        </form>
    </body>
</html>