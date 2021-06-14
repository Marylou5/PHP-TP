
<?php
include_once(dirname(__FILE__) . 'Tp/classe/Autoload.php');

Autoload::register();

$humainFemelle = new Humain(55, 1.65, true, 'Lisa');
$humainMale = new Humain(90, 1.9, false, 'Paul');
$baleineFemelle = new Baleine(5000, 27, true, 'nageoire courbé ');
$baleineMale = new Baleine(3.7, 15.3, false, 'nageoire longue');





