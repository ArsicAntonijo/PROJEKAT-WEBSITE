<?php
    class Pravilo {
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
        // Metoda koja stampa inform. o pravilu u zavisnosti od name_kriterijum.
        function stampaj_tabelu_pravila($name_kriterijum=NULL) {
            try {
                $sql="SELECT  * FROM privacy_policy";
                if(isset($name_kriterijum)) {   
                    $sql.=" WHERE name LIKE '%$name_kriterijum%'";
                }
                $pdo_izraz=$this->dbh->query($sql);
                $niz=$pdo_izraz->fetchALL(PDO::FETCH_ASSOC);
                echo "<table cellpadding='5' border='1'";  
                echo "<tr><th colspan='4'><h2 style='margin: 0'>Privacy policy</h2></th></tr>";   
                echo "<tr><th>Name of rule</th><th>Path of file</th><th colspan='2'></th></tr>";   
                foreach($niz as $pravilo) {
                    echo "<tr><td>" . $pravilo['name'] . "</td>";
                    echo "<td>" . $pravilo['file'] . "</td>";
                    echo "<td><input type='button' id='" . $pravilo['id'] . "' value='remove' onclick='brisi(" . $pravilo['id'] . ")'></td>";   
                    echo "<td><input type='button' id='" . $pravilo['id'] . "' value='update' onclick='izmeni(" . $pravilo['id'] . ")'</td></tr>";   
                }
                echo "</table>";
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
        // Metoda dodaje pravilo sa datim parametrima u bazu.
        function dodaj($name, $file) { 
            try {
                $sql="INSERT INTO privacy_policy (name, file) VALUES ('$name', '$file')";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja brise pravila sa ID-om $id iz baze.
        function brisi($id) {   
            try {
                $sql="DELETE FROM privacy_policy WHERE id=$id";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja za pravila sa ID-om $id azurira name, file.
        function izmeni($id, $name, $file) {   
            try {
                $sql="UPDATE privacy_policy SET name=:name, file=:file WHERE id=:id";   
                $pdo_izraz=$this->dbh->prepare($sql);
                $pdo_izraz->bindParam(':id', $id);   
                $pdo_izraz->bindParam(':name', $name);
                $pdo_izraz->bindParam(':file', $file);
                $pdo_izraz->execute();
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        /*  Metoda koja uzima iz baze podatke (id, name, file) o pravilu sa ID-om $id i vraca ih u obliku asocijativnog niza  */
        function uzmi_podatke_o_pravilu($id) {
            try {
                $sql="SELECT * FROM privacy_policy WHERE id=$id";
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