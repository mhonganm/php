<html>
<head>
<title> PHP test - Jenkins - Openshift</title>
</head>
<body>
<!--<body style="background-color:lemonchiffon;">-->
<!--<body style="background-color:powderblue;">-->  

<!--<?php echo '<h1 style="background-color:rgba(255, 99, 71, 0.5);font-family:verdana;text-align:center;">Heippa Maailma</h1>'; ?>-->
<?php echo '<h1>Heippa maailma</h1>'; ?>
  
<?php echo '<p>Mitä kuuluu?</p>'; ?>
<?php echo '<p>Valtori pilvipäivä 14.3.</p>'; ?>
<!--<?php echo '<p style="text-align:right;font-size:160%;font-family:arial">Valtori pilvipäivä 14.3.</p>'; ?>-->
<!--<?php echo '<p style="text-align:left;font-size:200%;font-family:impact">CI/CD demo jenkinsiä käyttäen</p>'; ?>-->

<!--<?php echo "<p style='text-align:center;font-size:120%;font-family:arial'>Serverin aika: " . date("h:i:sa")."</p>"; ?>-->
<!--<?php date_default_timezone_set("Europe/Helsinki"); echo "<p style='text-align:center;font-size:140%;font-family:arial'>Päivä ja aika: " . date("Y.m.d") . " " . date("h:i:sa"); ?>-->

<?php
$d1=strtotime("June 25");
$d2=ceil(($d1-time())/60/60/24);
echo "Vielä " . $d2 ." päivää juhannukseen.";
?>
<!--echo "<p style='text-align:center;font-size:120%;font-family:tahoma'>Vielä " . $d2 ." päivää juhannukseen.</p>";-->  
  
</body>
</html>
