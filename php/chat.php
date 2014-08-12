<?php

 /* Htaccess-Verzeichnisse
  * 
  * folgt
  */
    $rootplus = $_GET["rootplus"]; 
    if      ($rootplus == 0) { $root = ""; }
    else if ($rootplus == 1) { $root = "../"; }
    else if ($rootplus == 2) { $root = "../../"; }
    else if ($rootplus == 3) { $root = "../../../"; }
    else { $root = ""; }

 /* Micro Chat Script
  * 
  * http://www.phptoys.com/product/micro-chat.html
  */
    session_start();

 /* Kicken-Integration
  * 
  * folgt
  */
    $sitzung = $_GET['sitzung']; // Sitzungs-ID
    if ((!isset($sitzung)) || ($sitzung == "")) { $sitzung = $_POST['sitzung']; }
    if ((!isset($sitzung)) || ($sitzung == "")) { $sitzung = $_SESSION['sitzung']; }
 // if ((!isset($sitzung)) || ($sitzung == "")) { $sitzung = rand(0, 99999); }
    echo "<!-- sitzung: '".$sitzung."' -->";
    
 /* Konfiguration
  * 
  * folgt
  */
    $absendenText = "Nachricht eingeben und Enter";
    function createForm(){
      $sitzung = $_GET['sitzung']; // Sitzungs-ID ?>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <table align="center"><tbody><tr><td valign="center" align="center">
          Gib deinen Namen ein:
          <br /><br />
          <input type="hidden" name="sitzung" value="<?=$sitzung?>">
          <input class="text" type="text" name="name" style="border: black 1px solid; padding: 10px;" />
          <input class="text" type="submit" value="Anmelden" style="border: black 1px solid; padding: 10px;" />
          <br /><br />
        </td></tr></tbody></table>
      </form>
    <?php }

 /* URL Parameter
  * 
  * folgt
  */
    if (isset($_GET['u'])){
       unset($_SESSION['nickname']);
    }

 /* Anmeldung prüfen
  * 
  * folgt
  */
    $name    = isset($_GET['name']) ? $_GET['name'] : "Anonym";
    $_SESSION['nickname'] = $name;
    $nickname = isset($_SESSION['nickname']) ? $_SESSION['nickname'] : "Hidden";

    $daten = urldecode($_GET['daten']); // Pfad zum Daten-Ordner
    if ((!isset($daten)) || ($daten == "")) { $daten = "daten/"; } // Fallback

 /* Ajax-URLs */
    $datenEncode = urlencode($_GET['daten']); // Encode für Webservice-URL
    $datei = $daten."".$sitzung.".html"; // Daten-URL

?>