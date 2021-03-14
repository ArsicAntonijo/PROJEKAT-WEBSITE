<!DOCTYPE html>
<html>
    <head>
        <script>
            function brisi(id_pravila) {
                var odgovor=confirm("Brisanje pravila: Da li ste sigurni?");
                if(odgovor)
                    window.location="brisi.php?id="+id_pravila;
            }
            function izmeni(id_pravila) {
                window.location="izmeni.php?id="+id_pravila;
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
            include 'Pravilo_db.php'; 
            $pravila=new Pravilo();
            if(!isset($_GET['pretraga'])) {    
                $pravila->stampaj_tabelu_pravila();
            }
            else {
                $pravila->stampaj_tabelu_pravila($_GET['pretraga']);
            }
        ?>
        <form action="dodaj.php" method="get">
            <input type="submit" value="Add">
        </form>
    </body>
</html>