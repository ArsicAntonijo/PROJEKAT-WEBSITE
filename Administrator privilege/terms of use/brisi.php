<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            include 'Pravilo_db.php';
            $pravila=new Pravilo();
            $id=$_GET["id"];
            if($pravila->brisi($id))
                echo "Pravilo uspesno obrisano.";
            else  
                echo "Doslo je do greske u brisanju.";
        ?>
        <p><a href="index.php">Indeks pravila</a></p>
    </head>
</html>