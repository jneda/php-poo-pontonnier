<?php

require_once('classes/MyCalculator.php');

$calc1 = new MyCalculator(2.5, 7.6);
echo $calc1->add();
echo '<br/>';
echo $calc1->multiply();
echo '<br/>';

$calc2 = new MyCalculator(0, 42);
echo $calc2->add();
echo '<br/>';
echo $calc2->multiply();
echo '<br/>';
echo $calc1;