<?php include("php/chat.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Solomo Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <link type="text/css" href="css/index.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script><!-- Jquery nur für Nicescroll :/ -->
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" language="javascript">
    <!--
      var httpObject = null;
      var link =       "";
      var timerID =    0;
      var nickName =   "<?php echo $nickname; ?>";
      var sitzung =    "<?php echo $sitzung; ?>";
      var daten =      "<?php echo $datenEncode; ?>";
    //-->
    </script>
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body onload="UpdateTimer();" data-sitzung="<?php echo $sitzung; ?>">
    <div id="main">
      <?php if ((!isset($name)) || ($name == "") || ($name == "Anonym") || ($name == "Hidden") || ($name == "Kein Name") || ($name == "KeinName")) { ?>
        <?php createForm(); ?>
      <?php } else { ?>
        <?php $name = isset($_GET['name']) ? $_GET['name'] : "Unbekannt"; $_SESSION['nickname'] = $name; ?>
        <div id="result">
          <?php $data = file($datei); foreach ($data as $line) { echo $line; } ?>
        </div>
        <div id="sender" onkeyup="keypressed(event);">
          <input type="text" name="msg" id="msg" width="100%" height="100%" value="<?=$absendenText?>" onfocus="var ist = this.value; if (ist == '<?=$absendenText?>') { this.value = ''; this.style.color = 'black'; }" onblur="var ist = this.value; if (ist == '') { this.value = '<?=$absendenText?>'; this.style.color = 'darkGray'; }" />
      <!--<button onclick="doWork();"><?=$absendenText?></button>-->
        </div>   
      <?php } ?>
    </div>
  </body>
</html>