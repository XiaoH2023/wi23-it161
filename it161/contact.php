
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Xiao Han's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" >
  <meta name="viewport" content="width=device-width" >
  <meta charset="utf-8" >
  <link rel="stylesheet" href="css/portal.css" >
  <link rel="stylesheet" href="css/nav.css" >
 </head>
 <body>
     <header>
     <h1>Xiao's IT161 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Xiao</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of an adorable bunny " >
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of an adorable bunny " >
       
     <img class="phone" src="images/phone.jpg" alt="Photo of an adorable bunny family" >
       
       <h2 class="subheader">A little about me!</h2>
       
       <p>My favorite season is Summer! This is because in Summer there is great weather and a lot of outside activities.
        Summer also is an amazing time to interact with my family and go on hiking trips with them. My family and I love to swim in the Summer also due to the humid weather.</p>
       <p>I also like to try new, delicious food with my family. We have tried Mexican, Japanese, Indian, Thai, and other deriving cuisines.
        Through these differing foods, we have also learned a numerous amount of information and knowledge about those cultures.
        My family and I will always be open for trying different and unique cuisines.</p>
       <p>
        The final thing about me is that I like watching Chinese-Drama films.
        These shows are all very interesting and contain intriguing plots.</p>
       
     <footer>
      <p><small>&copy; 2023 by 
          <a href="contact.php">Xiao Han</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>