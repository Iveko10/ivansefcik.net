<nav>       
    <ul>
        <li><a id="index" href="index.php">Home</a></li>           
        <li class="dropdown"><a id="gallery" href="../maingallery.php"><i class="fa fa-camera-retro" style="font-size:90%;"></i> Gallery</a>
            <div id="rollmenu">
                <a href="../index.php">Priroda</a>
                <a href="../index.php">Portrety</a>
                <a href="../index.php">Eventy</a>
                <a href="../index.php">Digital</a>
                </div>
            </li>
        <li><a id="about" href="../about.php">About me</a></li>
        <li><a id="contact" href="../contact.php"><i class="fa fa-envelope" style="font-size:90%;"></i> Contact</a></li>
    </ul>
    </nav>



/* CSS */
/*Drop-roll menu pre galeriu*/

.dropdown:hover #rollmenu { display: block; }



#rollmenu {
    display: none;
    margin-top: 10px;
    position: absolute;
    min-width: 154px;
    background-color: rgb(38, 39, 36);
    text-decoration: none;       
    z-index: inherit;    
}

#rollmenu a{ 
    display: block;
    font-size: 0.95em;
    text-align: left;   
}

#rollmenu a:hover { background-color: rgb(60, 59, 59); }