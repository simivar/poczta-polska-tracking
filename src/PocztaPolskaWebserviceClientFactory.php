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
    public const DEFAULT_WSDL_URL = 'https://tt.poczta-polska.pl/Sledzenie/services/Sledzenie?wsdl';
    public const DEFAULT_USERNAME = 'sledzeniepp';
    public const DEFAULT_PASSWORD = 'PPSA';

    public static function factory(
        string $wsdl = self::DEFAULT_WSDL_URL,
        string $userName = self::DEFAULT_USERNAME,
        string $password = self::DEFAULT_PASSWORD
    ): PocztaPolskaWebserviceClient {
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
