<?php 
	session_start();
	$info = "";
	$log = "";
	echo $info;
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		$info = "";
		$log = "";
	} else {
		$info = $_SESSION["userInfo"];
		$log = "<button id=\"btn\" onclick=\"logout()\"> Izloguj se </button> ";
	}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylinghome.css">
        <!-- Google Navigation Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--	<button class="btn btn-default" onclick="window.location.href = 'logOut.php';"> Izloguj se </button> -->
	<style>
	#btn {
		background-color: lightgrey;
	}
	</style>
    </head>
    <body>
        <!-- HEADER -->
        <div style="text-align:right;margin-right:25px;">
            <a><?php echo $info; ?></a>
				<?php echo $log; ?>
        </div>
        <ul class="header">
            <li><a href="https://www.facebook.com/exit.festival" target="_blank"><img src="icons8/facebook.png" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/exitfestival" target="_blank"><img src="icons8/twitter.png" alt="Twitter"></a></li>
            <li><a href="https://www.youtube.com/user/EXITFestivalTV" target="_blank"><img src="icons8/youtube.png" alt="Youtube"></a></li>
            <li><a href="https://www.instagram.com/exitfestival/" target="_blank"><img src="icons8/instagram.png" alt="Instagram"></a></li>
            <li><a href="https://invite.viber.com/?g2=AQBPvAQBZbi8uEgO8tPY2Q6LZ2zTyqebIS%2BBCCRITnb7zWGLF8Zh39YUTpjGKrHc&lang=sr" target="_blank"><img src="icons8/viber.png" alt="Viber"></a></li>
            <li><a href="https://www.flickr.com/photos/exitfestival" target="_blank"><img src="icons8/flickr.png" alt="Flickr"></a></li>
            <li><a href="https://soundcloud.com/exitfestival" target="_blank"><img src="icons8/soundcloud.png" alt="Soundcloud"></a></li>
            <li><a href="https://www.mixcloud.com/exitfestival/" target="_blank"><img src="icons8/mixcloud.png" alt="Mixcloud"></a></li>
        </ul>
        <!-- NAVIGATION BAR -->
        <!-- nedostaju href linkovi -->
        <nav class="navbar">
            <span class="navbar-toggle" id="js-navbar-toggle">
                <i class="fa fas fa-bars"></i>
            </span>
            <a href="#" class="logo"><b>EXIT</b></a><!---->
            <ul class="main-nav" id="js-menu">
                <li id="deactivate"><a href="#"><b>EXIT</b></a></li>
                <li id="dropdown">
                    <a class="dropbtn">Tikets</a>
                    <div class="dropdown-content">
                      <a href="http://gigstix.com/sve-ulaznice/11-festivali/2913-exit-festival-2020" target="_blank" id="paint" style="text-align: center;">Serbia</a>
                      <a href="https://www.entrio.hr/event/exit-festival-2020-7099" target="_blank" id="paint" style="text-align: center;">Croatia</a>
                      <a href="https://www.kupikartizase.com/Events/exit_2020" target="_blank" id="paint" style="text-align: center;">Macedonia</a>
                      <a href="https://www.viva.gr/tickets/music/petrovaradin-fortress/exit-festival-2020/" target="_blank" id="paint" style="text-align: center;">Greece</a>
                      <a href="https://bilet.bg/bg/promoter/view/13470" target="_blank" id="paint" style="text-align: center;">Bulgaria</a>
                    </div>
                  </li> 
                <li><a href="\PROJEKAT - WEBSITE\2. dinamic gallery\gallery.php">Gallery</a></li>
                <li id="dropdown">
                    <a class="dropbtn">Family</a>
                    <div class="dropdown-content">
                      <a href="http://revolutionfestival.com/" target="_blank"  id="paint" style="text-align: center;">Revolution Festival</a>
                      <a href="https://www.seastarfestival.com/en/" target="_blank" id="paint" style="text-align: center;">Sea Star Festival</a>
                      <a href="https://www.nosleepfestival.com/" target="_blank" id="paint" style="text-align: center;">No Sleep Festival</a>
                      <a href="https://www.seadancefestival.me/en/" target="_blank" id="paint" style="text-align: center;">Sea Dance Festival</a>
                    </div>
                  </li> 
                <!-- dropdown -->
                <li id="dropdown">
                    <a class="dropbtn">Info</a>
                    <div class="dropdown-content">
                        <a href="\PROJEKAT - WEBSITE\7. contact form\index.php" id="paint" style="text-align: center;">Contact</a>
                        <a href="\PROJEKAT - WEBSITE\9. news\newss.html" id="paint" style="text-align: center;">News</a>
                        <a href="\PROJEKAT - WEBSITE\5. stages\stagess.php" id="paint" style="text-align: center;">Stages</a>
                        <a href="/PROJEKAT%20-%20WEBSITE/8.%20lineup/lineupgallery.php" id="paint" style="text-align: center;">Lineup</a>
                        <a href="https://www.trivago.com/" target="_blank" id="paint" style="text-align: center;">Acomodation</a>
                    </div>  
                </li>
                <!-- search -->
                <li>
                    <a href="\PROJEKAT - WEBSITE\6. search\index.php">Search</a>   
                </li>
                <li id="dropdown">
                    <a class="dropbtn" id="bigger">User</a>
                    <div class="dropdown-content">
                        <a href="/PROJEKAT%20-%20WEBSITE/10.%20forms/logIn.php" id="paint" style="text-align: center;">Log in</a>
                        <a href="/PROJEKAT%20-%20WEBSITE/10.%20forms/signUp.php" id="paint" style="text-align: center;">Sign up</a>
                        <a href="/PROJEKAT%20-%20WEBSITE/1.%20home/transfer.php" id="paint" style="text-align: center;">Log out</a>
                    </div>   
                </li>
            </ul>
        </nav>
        <script>
            let mainNav = document.getElementById('js-menu');
            let navBarToggle = document.getElementById('js-navbar-toggle');          
            navBarToggle.addEventListener('click', function(){ mainNav.classList.toggle('active'); });
        </script>
        <!-- CONTENT -->
        <div class="content-img" id="setmarg">
            <h1>About Us</h1>
            <p>EXIT is an award-winning summer music festival that takes place at the Petrovaradin Fortress in Novi Sad, 
                Serbia, with more than 1000 artist who play at over 40 stages and festival zones.</p>
            <p>It was officially proclaimed “Best Major European Festival” at the EU Festival Awards 2013 and 2017, 
                while its Montenegrin edition Sea Dance Festival won the “Best Mid-Sized European festival” Award in 2015. </p>
            <p>The EU Festival Award is considered as one of the most influentual festival awards in the world.</p>
            <p>EXIT has also won the “Best Overseas Festival” award at the UK Festival Awards in 2007, as well as “Best Summer Music Festival in Europe” 
                title for 2016 by the travel portal “European Best Destinations” awarded in cooperation with the European Commission.</p>
            <p>In March 2018 Regional Cooperation Council awarded EXIT Festival as Champion of Regional Cooperation for 2017.</p>
            <p>The festival was founded in 2000 in the University Park as a student movement, fighting for democracy and freedom in Serbia and the Balkans.</p>
            <p>After the Yugoslavian general election in 2000, EXIT moved to the Petrovaradin Fortress in 2001.</p>
            <p>EXIT has gained international media attention over the years and it was featured in articles  by CNN, The Guardian, The Sun, Euronews, 
                New York Times, BBC, Forbes, The Times, MTV, Huffington Post, Conde Nast Traveller, Daily Mail, The Independent, Lonely Planet and many more.</p>
            <p>EXIT team organizes five events on five different locations in four countries in South-East Europe: EXIT Festival (Novi Sad, Serbia) in July, Sea Dance Festival (Budva, Montenegro) in August,  
                Sea Star Festival (Umag, Croatia) in May, No Sleep Festival (Belgrade, Serbia) in November and Revolution Festival (Timișoara, Romania) in August.</p>
            <p>As festival was formed in the spirit of genuine youth rebellion, as a movement for freedom in Serbia and peace in the Balkans, the festival’s mission 
                statement has been clear from the beginning – to achieve social change with music. </p>
            <p style="margin-bottom: 0px;">Social responsibility is still the key aspect of the festival activities, with the main focus on environmental and humanitarian activities, 
                the creative industries development, as well as regional cooperation.</p> 
        </div>
        <div class="content-yout">
                <a href="https://www.youtube.com/watch?v=MFd18sF8CNU" target="_blank"><img class="wh" src="exit-aftrm.svg"></a>
        </div>
         <!-- FOOTER -->
         <div class="footer-top w" style="background-color: #e30613;">
            <ul>
                <li><a href="https://www.addiko.rs/" target="_blank"><img src="svglogo/addiko_bank.svg" alt="Addiko Bank"></a></li>
                <li><a href="https://www.alexandar-cosmetics.com/" target="_blank"><img src="svglogo/alexandar_cosmetics.svg" alt="Alexandar Cosmetics"></a></li>
                <li><a href="https://www.calvinklein.us/" target="_blank"><img src="svglogo/Calvin_Klein.svg" alt="Calvin Klein"></a></li>
                <li><a href="https://chipsy.rs/" target="_blank"><img src="svglogo/Chipsy.svg" alt="Chipsy"></a></li>
                <li><a href="https://cockta.eu/" target="_blank"><img src="svglogo/Cockta.svg" alt="Cockta"></a></li>
                <li><a href="https://www.deezer.com/" target="_blank"><img src="svglogo/Deezer.svg" alt="Deezer"></a></li>
                <li><a href="https://www.guarana.rs/" target="_blank"><img src="svglogo/Guarana.svg" alt="Guarana"></a></li>
                <li><a href="https://www.headandshoulders.com/" target="_blank"><img src="svglogo/Head_and_Shoulders.svg" alt="Head&Shoulders"></a></li>
                <li><a href="https://www.heineken.com/rs/" target="_blank"><img src="svglogo/Heineken.svg" alt="Heineken"></a></li>
                <li><a href="https://winningmoves.co.uk/" target="_blank"><img src="svglogo/monopoly.png" alt="Monopoly"></a></li>
            </ul>
            <ul>
                <li><a href="https://mts.rs/" target="_blank"><img src="svglogo/mts.svg" alt="MTS"></a></li>
                <li><a href="https://www.nis.eu/" target="_blank"><img src="svglogo/NIS_petrol.svg" alt="NIS petrol"></a></li>
                <li><a href="http://www.novisad.rs/" target="_blank"><img src="svglogo/novi_sad.svg" alt="Novi Sad"></a></li>
                <li><a href="https://promenadanovisad.rs/" target="_blank"><img src="svglogo/Promenada.svg" alt="Promenada"></a></li>
                <li><a href="http://www.vojvodina.gov.rs/" target="_blank"><img src="svglogo/pokrajina.svg" alt="Pokrajina"></a></li>
                <li><a href="https://www.viber.com/" target="_blank"><img src="svglogo/rakuten_viber.svg" alt="Rakuten viber"></a></li>
                <li><a href="https://www.facebook.com/SmirnoffIceSrbija/" target="_blank"><img src="svglogo/Smirnoff_Ice.svg" alt="Smirnoff Ice"></a></li>
                <li><a href="https://www.take-a-stand.eu/" target="_blank"><img src="svglogo/take_stand.svg" alt="Take stand"></a></li>
                <li><a href="https://rs.visa.com/" target="_blank"><img src="svglogo/VISA.svg" alt="VISA bank"></a></li>
                <li><a href="http://www.srbija.gov.rs/" target="_blank"><img src="svglogo/VRS.svg" alt="VRS"></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <img src="exit-logo.svg" alt="exit-logo">
            <p>&#169; 2019 EXIT Team. All rights reserved.</p>
            <p style="margin-bottom: 0px;">By visiting this site you agree to the terms of use set out below in the 
                <a href="\PROJEKAT - WEBSITE\3. terms of use\termsofuse.php">Terms of Use<a> and 
                <a href="\PROJEKAT - WEBSITE\4. privacy policy\privacypolicy.php">Privacy Policy</a>.</p>
		<script>
		function logout(){
			window.location.href = 'transfer.php';
		}
		</script>
    </body>
</html>