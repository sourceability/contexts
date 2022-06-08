<?php

$runner->addTestsFromDirectory(__DIR__ . '/tests/units');

$script->addDefaultReport();

$xunitWriter = new \atoum\atoum\writers\file(__DIR__ . '/atoum.xunit.xml');

$xunitReport = new \atoum\atoum\reports\asynchronous\xunit();
$xunitReport->addWriter($xunitWriter);

$runner->addReport($xunitReport);
