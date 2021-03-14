<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            include 'Slika_db.php';
            $slike=new Slika();
            $id=$_GET["id"];
            if($slike->brisi($id))
                echo "Slika uspesno obrisana.";
            else  
                echo "Doslo je do greske u brisanju.";
        ?>
        <p><a href="index.php">Indeks slike</a></p>
    </head>
</html>