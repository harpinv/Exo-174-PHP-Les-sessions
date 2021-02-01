<?php

session_start();
$_SESSION['preference'] = "SESSION PREF DEFINIE";

echo"Une variable de session appelée preference a été définie<br><br>
<a href='exemple2.php'>Cliquez ici pour visiter exemple2.php</a>";