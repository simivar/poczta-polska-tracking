<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking;

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;

final class PocztaPolskaTrackingClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('maksymalnaLiczbaPrzesylekResponse', Response\MaksymalnaLiczbaPrzesylekResponse::class),
            new ClassMap('sprawdzPrzesylke', Type\SprawdzPrzesylke::class),
            new ClassMap('sprawdzPrzesylkeResponse', Response\SprawdzPrzesylkeResponse::class),
            new ClassMap('sprawdzPrzesylkePl', Type\SprawdzPrzesylkePl::class),
            new ClassMap('sprawdzPrzesylkePlResponse', Response\SprawdzPrzesylkePlResponse::class),
            new ClassMap('sprawdzPrzesylki', Type\SprawdzPrzesylki::class),
            new ClassMap('sprawdzPrzesylkiResponse', Response\SprawdzPrzesylkiResponse::class),
            new ClassMap('sprawdzPrzesylkiPl', Type\SprawdzPrzesylkiPl::class),
            new ClassMap('sprawdzPrzesylkiPlResponse', Response\SprawdzPrzesylkiPlResponse::class),
            new ClassMap('sprawdzPrzesylkiOdDo', Type\SprawdzPrzesylkiOdDo::class),
            new ClassMap('sprawdzPrzesylkiOdDoResponse', Response\SprawdzPrzesylkiOdDoResponse::class),
            new ClassMap('sprawdzPrzesylkiOdDoPl', Type\SprawdzPrzesylkiOdDoPl::class),
            new ClassMap('sprawdzPrzesylkiOdDoPlResponse', Response\SprawdzPrzesylkiOdDoPlResponse::class),
            new ClassMap('wersjaResponse', Response\WersjaResponse::class),
            new ClassMap('witaj', Type\Witaj::class),
            new ClassMap('witajResponse', Response\WitajResponse::class),
            new ClassMap('Przesylka', Type\Przesylka::class),
            new ClassMap('DanePrzesylki', Type\DanePrzesylki::class),
            new ClassMap('Procedura', Type\Procedura::class),
            new ClassMap('ListaPrzesylekPowiazanych', Type\ListaPrzesylekPowiazanych::class),
            new ClassMap('PrzesylkaPowiazana', Type\PrzesylkaPowiazana::class),
            new ClassMap('Jednostka', Type\Jednostka::class),
            new ClassMap('SzczDaneJednostki', Type\SzczDaneJednostki::class),
            new ClassMap('GodzinyPracy', Type\GodzinyPracy::class),
            new ClassMap('GodzinyZUwagami', Type\GodzinyZUwagami::class),
            new ClassMap('ListaZdarzen', Type\ListaZdarzen::class),
            new ClassMap('Zdarzenie', Type\Zdarzenie::class),
            new ClassMap('Przyczyna', Type\Przyczyna::class),
            new ClassMap('Komunikat', Type\Komunikat::class),
            new ClassMap('ListaPrzesylek', Type\ListaPrzesylek::class),
        ]);
    }
}
