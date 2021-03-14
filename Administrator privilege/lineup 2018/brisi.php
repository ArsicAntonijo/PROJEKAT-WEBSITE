<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            include 'Lineup_db.php';
            $lineup=new Lineup();
            $id=$_GET["id"];
            if($lineup->brisi($id))
                echo "Lineup uspesno obrisan.";
            else  
                echo "Doslo je do greske u brisanju.";
        ?>
        <p><a href="index.php">Indeks lineup</a></p>
    </head>
</html>