<?php
session_start();
if(isset($_GET['route'])){
 if(
    $_GET['route'] == "404front"                  ||
    $_GET['route'] == "login"                     ||
    $_GET['route'] == "homepage"                  ||
    $_GET['route'] == "frontheader"               ||
    $_GET['route'] == "frontcontact"){
         // Header frronti
        include("includes/frontheader.php");
          include("modules/".$_GET['route'].".php");
        include("includes/frontfooter.php");
          // Footer
  }else if($_GET['route'] == "CMS"                ||
    $_GET['route'] == "aboutus"                   ||
    $_GET['route'] == "appointmens"               ||
    $_GET['route'] == "clients"                   ||
    $_GET['route'] == "contact"                   ||
    $_GET['route'] == "dashboard"                 ||
    $_GET['route'] == "service"                   ||
    $_GET['route'] == "users"                     ||
    $_GET['route'] == "my-account"                ||
    $_GET['route'] == "messages"
     )
  {
    include("Views/includes/header.php");
    include("modules/CMS/".$_GET['route'].".php");
    include("Views/includes/footer.php");
  }else{
    include("modules/CMS/404.php");
  }
  }else{
    include("includes/frontheader.php");
    include("modules/homepage.php");
    include("includes/frontfooter.php");
}
?>