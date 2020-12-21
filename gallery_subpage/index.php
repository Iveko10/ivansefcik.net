<!DOCTYPE html>
<html lang='sk'>
  <head>
    <title>Ivan Šefčík - Galéria</title>    
      <link rel="stylesheet" type="text/css" href="../css/style_CSS.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     <!-- icon css library -->
      <link rel="icon" href="../images/favicon2.jpg">
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway:300" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset='utf-8'>    
      <meta name='author' content='Ivan Sefcik'>
      <meta name='robots' content='all'>
      <script>                    
          var pageNameString = 'gallery';            
      </script>
      <script type="text/javascript" src="../script/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../script/jsFunctions.js"></script>
  </head>    
    <body>     
        <div id="header-phantom"></div>
        <header class="header"><?php include "../php/header.php"; ?></header> 
        <div class="content">       
            <div class="content-text-fade">
                <h1>Galéria</h1>
            </div>
            <div class="gallery-container">                
                <div class="gallery-category">
                    <a href="./portraits.php">Portréty</a>
                </div>
                <div class="gallery-category">
                    <a href="./nature.php">Príroda</a>
                </div>
                <div class="gallery-category">
                    <a href="./urban.php">Urban</a>
                </div>                
                <div class="gallery-category">
                    <a href="./weddings.php">Svadby</a>
                </div>
                <div class="gallery-category">
                    <a href="./experiments.php">Experimenty</a>
                </div>
                <div class="gallery-category">
                    <a href="./events.php">Eventy (comming soon)</a>
                </div>
            </div>            
        </div>                
        <footer><?php include "../php/footer.php"; ?></footer> 
    </body>
</html>