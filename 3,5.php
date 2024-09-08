<?php
$radius = rand(1, 400);
$diametr = $radius * 2;
$s = M_PI * pow($radius, 2);
echo "<h1>Площа кола: $s px²
<div style='width: {$diametr}px; height: {$diametr}px; background: green; border-radius: 50%;'></div>";