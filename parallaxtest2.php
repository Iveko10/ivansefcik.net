<!DOCTYPE html>
<html lang='sk'>
  <head>
    <title>Ivan Šefčík - portfólio</title>    
      <meta charset='utf-8'>    
      <meta name='author' content='Ivan Sefcik'>
      <meta name='robots' content='all'>
      
      <style>
          body {
              font-size: 35px;
              margin: 0 auto; 
              width: 100%;              
          }
          
          .background { /*para1*/
              position: fixed;
              margin: auto;
              width: 100%;
              height: 100vh;
              background-color: pink;
              background: url("http://ivansefcik.net/images/galleries/events2.jpg") no-repeat center center;              
              background-size: cover;
              top: 0; left: 0;
              z-index: -5;
          }          
         .scroll {
              height: 600px;
              max-width: 100%;
              color: white;              
              background-color: darkblue;     
              opacity: 1;             
          }
          .parallax{
              margin-top: 90vh;
          }
          
          p {
              padding: 50px;
          }
          
          
      </style>
      
      
  </head>     
    <body>
        <div class="background"></div>
        <div class="scroll parallax"><p>Content to scroll</p></div>
        <div class="scroll"><p>Content to scroll</p></div>
        <div class="scroll"><p>Content to scroll</p></div>
    </body>