<?php

require_once ('BigMacBuilderInterface.php');
require_once ('BigMac.php');
require_once ('BigMacBuilder.php');
require_once ('Cook.php');

$builder = new BigMacBuilder();
$cook = new Cook();
$cook->setBuilder($builder);

echo "-=standard--";
$bigMac = $cook->cookStandardBigMac();
echo implode(PHP_EOL,$bigMac->getIngredients()). PHP_EOL;
$builder->reset();
echo "-=VEGAN--";
$bigMac = $cook->cookStandardBigMac();
echo implode(PHP_EOL,$bigMac->getIngredients()). PHP_EOL;
