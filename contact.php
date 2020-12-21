<!DOCTYPE html>
<html lang='sk'>
  <head>
    <title>Ivan Šefčík - Kontakt</title> 
      <link rel="stylesheet" href="./css/style_CSS.css"/>
      <link rel="icon" href="./images/favicon2.jpg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>     <!-- icon css library -->
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway:300" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset='utf-8'>    
      <meta name='author' content='Ivan Sefcik'>
      <meta name='robots' content='all'>
      <script>                    
          var pageNameString = 'contact';            
      </script>
      <script type="text/javascript" src="./script/jquery-3.2.1.min.js"></script>     
      <script type="text/javascript" src="./script/jsFunctions.js"></script>      
  </head>    
    <body> 
        <?php include "./script/formScript.php" ?>    
        <div id="header-phantom"></div>
        <header class="header"><?php include "php/header.php"; ?></header> 
        <div class="content">       
            <div class="content-text-fade">
                <h1>Kontakt</h1>                
            </div>                                   
            <hr>     
            <div class="thank-you <?php echo $addClass_success?>">
                <?php echo $thanksMessage;?>
            </div>            
            <div class="formular">               
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                    
                    <div class="form-control">
                        <div class="input-name">
                            <label for="fName">Meno*</label>
                            <span class="error"><?php echo $errfName; ?></span>
                            <br>
                            <input type="text" name="fName" id="fName" value="<?php echo $fName;?>">   <!-- required -->
                        </div>
                        <div class="input-name">
                            <label for="lName">Priezvisko*</label>
                            <span class="error"><?php echo $errlName; ?></span>
                            <br>
                            <input type="text" name="lName" id="lName" value="<?php echo $lName; ?>">  <!-- required -->
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="email">Email*</label>
                        <span class="error"><?php echo $errEmail;?></span>
                        <br>
                        <input type="email" value="<?php echo $email;?>" name="email" id="email">  <!-- required -->
                    </div>
                    <div class="form-control">
                        <label for="message">Správa*</label>
                        <span class="error"><?php echo $errMessage;?></span>
                        <br>
                        <textarea class="form-control" name="message" id="message"><?php echo $message;?></textarea>
                        <br>
                    </div>
                    <input type="submit" value="Send">                    
                </form>
            </div>
            <hr>
            <div class="social-links">
                <h2>Sociálne siete</h2>
                <div class="social-icon"><a href="http://instagram.com/ivekuum"><img alt="Instagram" src="./images/social/instagram.png"></a></div>
                <div class="social-icon"><a href="https://zoroo.deviantart.com/gallery"><img alt="DeviantArt" src="./images/social/deviantart.png"></a></div>
                <div class="social-icon"><a href="http://iveko-photography.tumblr.com"><img alt="Tumblr" src="./images/social/tumblr.png"></a></div>                
            </div> 
        </div>                
        <footer><?php include "php/footer.php"; ?></footer>
    </body>
</html>