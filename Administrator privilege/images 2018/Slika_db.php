<?php
    class Slika {
        private $dbh;
        // Konstruktor
        function __construct() {
            try {
                $konekcioni_string='mysql:host=localhost;dbname=dbexitfest';
                $this->dbh=new PDO($konekcioni_string, 'root', '');
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
        // Destruktor
        function __destruct() {
            $this->dbh=null;
        }
        // Metoda koja stampa inform. o slici u zavisnosti od name_kriterijum.
        function stampaj_tabelu_slike($name_kriterijum=NULL) {
            try {
                $sql="SELECT  * FROM images2018";
                if(isset($name_kriterijum)) {   
                    $sql.=" WHERE name LIKE '%$name_kriterijum%'";
                }
                $pdo_izraz=$this->dbh->query($sql);
                $niz=$pdo_izraz->fetchALL(PDO::FETCH_ASSOC);
                echo "<table cellpadding='5' border='1'";  
                echo "<tr><th colspan='4'><h2 style='margin: 0'>Images 2018</h2></th></tr>";   
                echo "<tr><th>Name of image</th><th>Path of image</th><th colspan='2'></th></tr>";   
                foreach($niz as $slika) {
                    echo "<tr><td>" . $slika['name'] . "</td>";
                    echo "<td>" . $slika['path'] . "</td>";
                    echo "<td><input type='button' id='" . $slika['id'] . "' value='remove' onclick='brisi(" . $slika['id'] . ")'></td>";   
                    echo "<td><input type='button' id='" . $slika['id'] . "' value='update' onclick='izmeni(" . $slika['id'] . ")'</td></tr>";   
                }
                echo "</table>";
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
        // Metoda dodaje sliku sa datim parametrima u bazu.
        function dodaj($name, $path) { 
            try {
                $sql="INSERT INTO images2018 (name, path) VALUES ('$name', '$path')";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja brise slike sa ID-om $id iz baze.
        function brisi($id) {   
            try {
                $sql="DELETE FROM images2018 WHERE id=$id";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja za slike sa ID-om $id azurira name, path.
        function izmeni($id, $name, $path) {   
            try {
                $sql="UPDATE images2018 SET name=:name, path=:path WHERE id=:id";   
                $pdo_izraz=$this->dbh->prepare($sql);
                $pdo_izraz->bindParam(':id', $id);   
                $pdo_izraz->bindParam(':name', $name);
                $pdo_izraz->bindParam(':path', $path);
                $pdo_izraz->execute();
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        /*  Metoda koja uzima iz baze podatke (id, name, path) o slici sa ID-om $id i vraca ih u obliku asocijativnog niza  */
        function uzmi_podatke_o_slici($id) {
            try {
                $sql="SELECT * FROM images2018 WHERE id=$id";
                $pdo_izraz=$this->dbh->query($sql);
                $obj=$pdo_izraz->fetch(PDO::FETCH_ASSOC);
                return $obj;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
    }
?>