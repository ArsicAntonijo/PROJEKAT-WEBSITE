<?php
    class Bina {
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
        // Metoda koja stampa inform. o bini u zavisnosti od name_kriterijum.
        function stampaj_tabelu_bine($name_kriterijum=NULL) {
            try {
                $sql="SELECT  * FROM stages";
                if(isset($name_kriterijum)) {   
                    $sql.=" WHERE name LIKE '%$name_kriterijum%'";
                }
                $pdo_izraz=$this->dbh->query($sql);
                $niz=$pdo_izraz->fetchALL(PDO::FETCH_ASSOC);
                echo "<table cellpadding='5' border='1'";  
                echo "<tr><th colspan='6'><h2 style='margin: 0'>Stages</h2></th></tr>";   
                echo "<tr><th>Name of stage</th><th>Path of image file</th><th>Path of text file</th><th>Path of logo file</th><th colspan='2'></th></tr>";   
                foreach($niz as $bina) {
                    echo "<tr><td>" . $bina['name'] . "</td>";
                    echo "<td>" . $bina['imgfile'] . "</td>";
                    echo "<td>" . $bina['txtfile'] . "</td>";
                    echo "<td>" . $bina['logofile'] . "</td>";
                    echo "<td><input type='button' id='" . $bina['id'] . "' value='remove' onclick='brisi(" . $bina['id'] . ")'></td>";   
                    echo "<td><input type='button' id='" . $bina['id'] . "' value='update' onclick='izmeni(" . $bina['id'] . ")'</td></tr>";   
                }
                echo "</table>";
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
            }
        }
        // Metoda dodaje binu sa datim parametrima u bazu.
        function dodaj($name, $imgfile, $txtfile, $logofile) { 
            try {
                $sql="INSERT INTO stages (name, imgfile, txtfile, logofile) VALUES ('$name', '$imgfile', '$txtfile', '$logofile')";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja brise binu sa ID-om $id iz baze.
        function brisi($id) {   
            try {
                $sql="DELETE FROM stages WHERE id=$id";
                $pdo_izraz=$this->dbh->exec($sql);
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        // Metoda koja za bine sa ID-om $id azurira name, imgfile, txtfile, logofile.
        function izmeni($id, $name, $imgfile, $txtfile, $logofile) {   
            try {
                $sql="UPDATE stages SET name=:name, imgfile=:imgfile, txtfile=:txtfile, logofile=:logofile WHERE id=:id";   
                $pdo_izraz=$this->dbh->prepare($sql);
                $pdo_izraz->bindParam(':id', $id);   
                $pdo_izraz->bindParam(':name', $name);
                $pdo_izraz->bindParam(':imgfile', $imgfile);
                $pdo_izraz->bindParam(':txtfile', $txtfile);
                $pdo_izraz->bindParam(':logofile', $logofile);
                $pdo_izraz->execute();
                return true;
            }
            catch(PDOException $e) {
                echo "GRESKA: ";
                echo $e->getMessage();
                return false;
            }
        }
        /*  Metoda koja uzima iz baze podatke (id, name, imgfile, txtfile, logofile) o bini sa ID-om $id i vraca ih u obliku asocijativnog niza  */
        function uzmi_podatke_o_bini($id) {
            try {
                $sql="SELECT * FROM stages WHERE id=$id";
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