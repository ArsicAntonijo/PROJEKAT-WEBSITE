<!DOCTYPE html>
<html>
    <head>
        <script>
            function brisi(id_slike) {
                var odgovor=confirm("Brisanje slike: Da li ste sigurni?");
                if(odgovor)
                    window.location="brisi.php?id="+id_slike;
            }
            function izmeni(id_slike) {
                window.location="izmeni.php?id="+id_slike;
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
            include 'Slika_db.php'; 
            $slike=new Slika();
            if(!isset($_GET['pretraga'])) {    
                $slike->stampaj_tabelu_slike();
            }
            else {
                $slike->stampaj_tabelu_slike($_GET['pretraga']);
            }
        ?>
        <form action="dodaj.php" method="get">
            <input type="submit" value="Add">
        </form>
    </body>
</html>