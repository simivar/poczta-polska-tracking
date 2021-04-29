<?php

use Simivar\PocztaPolskaTracking\PocztaPolskaTrackingClientFactory;

require_once 'vendor/autoload.php';

$client = PocztaPolskaTrackingClientFactory::factory();
//var_dump($client->sprawdzPrzesylke(new \Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylke('00259007731931157918')));
var_dump($client->checkShipments(new \Simivar\PocztaPolskaTracking\TranslatedType\CheckShipments(['00259007731931157918'])));