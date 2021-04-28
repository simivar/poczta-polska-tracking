<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice;

use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Simivar\PocztaPolskaWebservice\Middleware\UsernameTokenAuthentication;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

final class PocztaPolskaWebserviceClientFactory
{
    public static function factory(string $wsdl, string $userName = 'sledzeniepp', string $password = 'PPSA'): PocztaPolskaWebserviceClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();
        $handler->addMiddleware(new UsernameTokenAuthentication($userName, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(PocztaPolskaWebserviceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new PocztaPolskaWebserviceClient($engine, $eventDispatcher);
    }
}
