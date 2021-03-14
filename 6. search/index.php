<!-- WE SEARCH BY COLUMN 'name' IN THE DATABASE OF TABLES: 'terms_of_use' & 'privacy_policy' -->
<!-- NADOGRADITI SA JOS NEKOM TABELOM? -->
<?php
    $q=$_GET['q'];
    if(($_GET['q'])=='') {
        header('Location: index.php?q=Search...');
    }
    if(($_GET['q'])!=='') {
        // Creating a connection
        $conn=new mysqli("localhost", "root", "", "dbexitfest");    /**/
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function active() {
                var searchBar=document.getElementById('searchBar');
                if(searchBar.value=='Search...') {
                    searchBar.value='';
                    searchBar.placeholder='Search...';
                }
            }
            function inactive() {
                var searchBar=document.getElementById('searchBar');
                if(searchBar.value=='') {
                    searchBar.value='Search...';
                    searchBar.placeholder='';
                }
            }
        </script>
    </head>
    <body>
        <div id="paint">
            <form action="index.php" method="GET" id="searchForm">
                <a href="\PROJEKAT - WEBSITE\1. home\Home.php"><img id="img" src="exit-logo.svg" alt="EXIT" width="200px" height="100px"></a><br>
                <input type="text" name="q" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onMouseDown="active();" onBlur="inactive();"><input type="submit" id="searchBtn" value="Go!">
            </form>
            <?php
                // Creating a connection
                $query1="SELECT * FROM terms_of_use WHERE name LIKE '%$q%'";
                $query2="SELECT * FROM privacy_policy WHERE name LIKE '%$q%'";    
                // Execute sql query
                $result1=$conn->query($query1);
                $result2=$conn->query($query2);
                ?>
                    <p><strong><?php echo ($result1->num_rows)+($result2->num_rows); ?></strong> results for '<?php echo $q; ?>'</p>
                <?php
                if($result1->num_rows> 0) {
                    while($row=$result1->fetch_array()){
                        $name=$row['name'];
                        echo '<h3><a href="\PROJEKAT - WEBSITE\3. terms of use\termsofuse.php">' . $name . '</h3></a>';
                    }
                }
                if($result2->num_rows> 0) {
                    while($row=$result2->fetch_array()){
                        $name=$row['name'];
                        echo '<h3><a href="\PROJEKAT - WEBSITE\4. privacy policy\privacypolicy.php">' . $name . '</h3></a>';
                    }
                }
            ?>
        </div>
    </body>
</html>
<?php
    }
?>