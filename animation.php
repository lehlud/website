<?php
function randomColor()
{
  return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

$dom = new DOMDocument('1.0', 'utf-8');

$objectCount = 450;

$animationDiv = $dom->createElement('div');
$animationDiv->setAttribute('id', 'animation');
$animationDiv->setAttribute('style', "--animation-object-count: $objectCount;");
$dom->appendChild($animationDiv);

for ($i = 0; $i < $objectCount; $i++) {
  $nthChild = $dom->createElement('div');

  $color = randomColor();
  $error = 0.3 + (mt_rand() / mt_getrandmax()) * 10;

  $offsetAngle = 2 * M_PI * ($i / $objectCount);
  $offsetSin = sin($offsetAngle);
  $offsetCos = cos($offsetAngle);

  $sign = (mt_rand() / mt_getrandmax() > 0.5) ? 1 : -1;

  $nthChild->setAttribute('style', "--error: $error; --color: $color; --offset-sin: $offsetSin; --offset-cos: $offsetCos; --sign: $sign;");

  $shapeQualifier = mt_rand() % 1000000;
  if ($shapeQualifier % 2 == 0) $nthChild->setAttribute('class', 'circle');
  if ($shapeQualifier % 3 == 0) $nthChild->setAttribute('class', 'square');
  if ($shapeQualifier % 5 == 0) $nthChild->setAttribute('class', 'donut');

  $animationDiv->appendChild($nthChild);
}

$result = $dom->saveHTML();
if ($result !== false) echo $result;
