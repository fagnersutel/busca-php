<?php

//echo '<br>' . $ini  = substr($_GET['reservation'], 0, 10);
echo '<br>' . $ini  = implode("-", array_reverse(explode("/", substr($_GET['reservation'], 0, 10))));
echo '<br>' . $fim  = implode("-", array_reverse(explode("/", substr($_GET['reservation'], -10))));
$range =  explode(";", $_GET['range']);
echo '<br>' . $range[0];
echo '<br>' . $range[1];
echo '<br>' . $_GET['beneficiario'];
