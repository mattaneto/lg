<$php

$area = 100;

$liters  = floatval($area/6);
$litersf = ceil(floatval($liters*1.1));
$cans = ceil(floatval($litersf)/18);
$galons = ceil(floatval($litersf) / floatval(3.6));
$pcans = $cans*80.0;
$pgalons = $galons*25.0;
$paintn = floatval($area)/6;
$can = 18.0;
$galon = 3.6;
$limit = 108;
$x = $area - $limit;
$y = $x/6;
$z = ceil(floatval($y*1.1));

$a = intval($litersf/18);
$b = $litersf%18;
$c = ceil($b/3.6);
$d = (($a*80)+($c*25));

echo "You will need " .$litersf. "liters of paint, " .$cans. " cans and pay " .$pcans."<br />";
echo "You will need " .$litersf. "liters of paint, " .$galons. " cans and pay " .$pgalons."<br />";
echo "You will need " .$litersf. "liters of paint, " .$a. " cans, " .$c." galons and pay " .$d."<br />";
$>