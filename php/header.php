<div class="menu-container">
    <div class="header-animation">
        <a href="../index.php">  
            <div class="logo"></div>            
            <!--
            <img class="logo" src="images/ivphoto-logo.png" alt="iv photo">
            -->
        </a>
    </div>
    <div class="menu-icon-container">
        <img class="nav-btn" src="../images/menu-icon.png" alt="MENU">
    </div>
</div>
<div id="headerPolozky">    
    <nav>       
    <ul>
        <!-- correct version

        <li><a id="index" href="../index.php">Domov</a></li>         
        <li><a id="gallery" href="../gallery/"><i class="fa fa-camera-retro" style="font-size:90%;"></i> Galéria</a></li>
        <li><a id="about" href="../about.php"><li>O mne</a></li>
        <li><a id="contact" href="../contact.php"><i class="fa fa-envelope" style="font-size:90%;"></i> Kontakt</a></li>
        -->

        <a id="index" href="../index.php"><li>Domov</li></a>         
        <a id="gallery" href="../gallery/"><li class="dropdown"><i class="fa fa-camera-retro" style="font-size:90%;"></i> Galéria</li></a>
        <a id="about" href="../about.php"><li>O mne</li></a>
        <a id="contact" href="../contact.php"><li><i class="fa fa-envelope" style="font-size:90%;"></i> Kontakt</li></a>
    </ul>
    </nav>
</div>    

<script>
    //var pageNameString is defined in pages-script;
    var pageNameId = document.getElementById(pageNameString);
    $(pageNameId).addClass('current');    
</script>