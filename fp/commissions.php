<!DOCTYPE html>
<html lang="en">
 <head>
  <title>pigmented dreams</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     
     <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     
     <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
     
     <script src="js/script.js"></script>
     
 </head>
 <body>
     
   <main>
       <header>
           <h1><a href="index.html" class="header">pigmented dreams</a></h1>
             <nav id="cssmenu">
              <ul>
                 <li><a href="index.html"> home </a></li>
                 <li><a href="gallery.html"> gallery</a></li>
                 <li><a href="commissions.php">commissions</a></li>
                 <li><a href="about.html"> about</a></li>
                 <li><a href="contact.php"> contact me</a></li>
              </ul>
             </nav>
        </header>
       
        <section>
            <h3 class="subheader">commissions</h3>
             <p>Here you can request a commission. Please be sure to specify the size, the type of the medium, and give details of what you are requesting.</p>
            <br>
        </section>

       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanaaneooo@gmail.com";  //place your/your client's email address here
        $toName = "Intisar Osman"; //place your client's name here
        $website = "Pigmented Dreams";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
	   ?>
       
     <footer>
        <a target="_blank" href="https://www.instagram.com/twinsunss/"> 
            <img src="images/instagram-icon.png" class="socials"></a>
      <p><small>&copy; 2021 by <a href="contact.php">Hanan Osman</a>, All Rights Reserved ~ <a href="disclaimer.html">Disclaimer/Privacy Notice</a> ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
     
 </body>
</html>