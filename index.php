<!DOCTYPE html>
<html lang='sk'>
  <head>
    <title>Ivan Šefčík - portfólio</title>    
      <link rel="stylesheet" type="text/css" href="./css/style_CSS.css">
      <link rel="icon" href="./images/favicon2.jpg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- icon css library -->
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway:300" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" > 
      <meta charset='utf-8'>    
      <meta name='author' content='Ivan Sefcik'>
      <meta name='robots' content='all'>   
      <script type="text/javascript" src="./script/jquery-3.2.1.min.js"></script>
      <script>   
      document.addEventListener("DOMContentLoaded", function(){
              slideShow();              
              });           
          var pageNameString = 'index';            
      </script> 
      <script type="text/javascript" src="./script/relativeheader.js"></script>
      <script type="text/javascript" src="./script/jsFunctions.js"></script>           
  </head>     
    <body>        
        <div class="para-box1">            
                <div class="welcome-bcgr">
                    <img src="./images/iv-photo.svg" id="welcome-logo" alt="iv-photo logo" class="svg-shadow">
                    <div id="welcome-name" class="text-shadow"><p>„Earth without art is just eh”</p></div>
                </div>           
        </div>        
        <div class="para-box2 space">  
            <div id="content-anchor"></div>
            <div id="header-phantom"></div>
            <header class="header"><?php include "php/header.php"; ?></header>
            <div class="content">
                <div class="ig-feed">
                    <h1>Instagram Feed</h1>
                    <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script>
                    <iframe src="//lightwidget.com/widgets/c11ef7f061815e258e746d783e3dfbe9.html" scrolling="no" allowtransparency="true"  class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;">
                    </iframe>
                </div>                
                <div class="content-text-fade">
                    <h1>Preskúmaj galériu</h1>
                </div> 
                <div id="gallery-thumbs">
                    <div class="gallery-item">
                        <figure>
                            <a href="./gallery_subpage/weddings.php">
                                <img src="images/galleries/events2-thumb.jpg" alt="weddings">
                                <figcaption>Svadby</figcaption>
                            </a>
                        </figure>
                    </div>
                        <div class="gallery-item">
                            <figure>
                                <a href="./gallery_subpage/portraits.php">
                                    <img src="images/galleries/portraits-thumb.jpg" alt="portraits">
                                    <figcaption>Portréty</figcaption>
                                </a>

                            </figure>
                        </div>
                    <div class="gallery-item">
                        <figure>
                            <a href="./gallery_subpage/nature.php">
                                <img src="images/galleries/nature-thumb.jpg" alt="nature">
                                <figcaption>Príroda</figcaption>
                            </a>
                        </figure>    
                    </div>
                    <div class="gallery-item">
                        <figure>
                            <a href="./gallery_subpage/urban.php">
                                <img src="images/galleries/urban-thumb.jpg" alt="urban">
                                <figcaption>Urban</figcaption>
                            </a>
                        </figure>
                    </div>                    
                    <div class="gallery-item">
                        <figure>
                            <a href="./gallery_subpage/experiments.php">
                                <img src="images/galleries/experiments-thumb.jpg" alt="experiments">
                                <figcaption>Experimenty</figcaption>
                            </a>
                        </figure>
                    </div>
                </div>               
             </div>
        </div>            
        <footer><?php include "php/footer.php"; ?></footer>
        <div class="retnuoc">
        <a href="http://info.flagcounter.com/dgyU"><img src="//s07.flagcounter.com/count2/dgyU/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
        </div>
    </body>
</html>
        