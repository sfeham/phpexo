<?php

date_default_timezone_set("Europe/Paris");

//echo date("m.d.y")."  ". date("H:I:s");

$tomorrow  = mktime(date("m")  , date("d")+1, date("Y"));

print $tomorrow;



