<?php
    class Lineup {
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
        // Metoda koja stampa inform. o lineup u zavisnosti od name_kriterijum.
        function stampaj_tabelu_lineup($name_kriterijum=NULL) {
            try {
                $sql="SELECT  * FROM lineup2020";
                if(isset($name_kriterijum)) {   
                    $sql.=" WHERE name LIKE '%$name_kriterijum%'";
                }
                $pdo_izraz=$this->dbh->query($sql);
                $niz=$pdo_izraz->fetchALL(PDO::FETCH_ASSOC);
                echo "<table cellpadding='5' border='1'";  
                echo "<tr><th colspan='4'><h2 style='margin: 0'>Lineup 2020</h2></th></tr>";   
                echo "<tr><th>Name of lineup</th><th>Path of lineup</th><th colspan='2'></th></tr>";   
                foreach($niz as $line) {
                    echo "<tr><td>" . $line['name'] . "</td>";
                    echo "<td>" . $line['path'] . "</td>";
                    echo "<td><input type='button' id='" . $line['id'] . "' value='remove' onclick='brisi(" . $line['id'] . ")'></td>";   
                    echo "<td><input type='button' id='" . $line['id'] . "' value='update' onclick='izmeni(" . $line['id'] . ")'</td></tr>";   
                }
                echo "</table>";
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
        // Metoda dodaje lineup sa datim parametrima u bazu.
        function dodaj($name, $path) { 
            try {
                $sql="INSERT INTO lineup2020 (name, path) VALUES ('$name', '$path')";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja brise lineup sa ID-om $id iz baze.
        function brisi($id) {   
            try {
                $sql="DELETE FROM lineup2020 WHERE id=$id";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja za lineup sa ID-om $id azurira name, path.
        function izmeni($id, $name, $path) {   
            try {
                $sql="UPDATE lineup2020 SET name=:name, path=:path WHERE id=:id";   
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
        /*  Metoda koja uzima iz baze podatke (id, name, path) o lineup sa ID-om $id i vraca ih u obliku asocijativnog niza  */
        function uzmi_podatke_o_lineup($id) {
            try {
                $sql="SELECT * FROM lineup2020 WHERE id=$id";
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