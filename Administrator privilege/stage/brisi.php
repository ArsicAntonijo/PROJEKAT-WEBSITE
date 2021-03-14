<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            include 'Bina_db.php';
            $bine=new Bina();
            $id=$_GET["id"];
            if($bine->brisi($id))
                echo "Bina uspesno obrisana.";
            else  
                echo "Doslo je do greske u brisanju.";
        ?>
        <p><a href="index.php">Indeks bine</a></p>
    </head>
</html>