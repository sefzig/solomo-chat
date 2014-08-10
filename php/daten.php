<?php 
    $sitzung = $_GET['sitzung'];
    $daten = urldecode($_GET['daten']);
    if ((isset($daten)) && ($daten != "")) {} else { $daten = "../daten/"; }
    $datei = $daten."".$sitzung.".html";
    
	if (isset($_GET['msg'])){
		if (file_exists($datei)) {
		   $f = fopen($datei,"a+");
		} else {
		   $f = fopen($datei,"w+");
		}
      $nick = isset($_GET['nick']) ? $_GET['nick'] : "Hidden";
      $msg  = isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : ".";
      $line = "<p><div class=\"blase\"><span class=\"name\">$nick:</span>&nbsp;&nbsp;<span class=\"txt\">$msg</span></div></p>";
		fwrite($f,$line."\r\n");
		fclose($f);
		
		echo $line;
		
	} else if (isset($_GET['all'])) {
	   $flag = file($datei);
	   $content = "";
	   foreach ($flag as $value) {
	   	$content .= $value;
	   }
	   echo $content;

	}
?>	
