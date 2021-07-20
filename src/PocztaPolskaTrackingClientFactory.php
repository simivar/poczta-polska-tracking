<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking;

use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Simivar\PocztaPolskaTracking\Middleware\UsernameTokenAuthentication;
use Symfony\Component\EventDispatcher\EventDispatcher;

final class PocztaPolskaTrackingClientFactory
{
    public const DEFAULT_WSDL_URL = 'https://tt.poczta-polska.pl/Sledzenie/services/Sledzenie?wsdl';
    public const DEFAULT_USERNAME = 'sledzeniepp';
    public const DEFAULT_PASSWORD = 'PPSA';

    public static function factory(
        string $wsdl = self::DEFAULT_WSDL_URL,
        string $userName = self::DEFAULT_USERNAME,
        string $password = self::DEFAULT_PASSWORD
    ): PocztaPolskaTrackingClient {
        $handler = HttPlugHandle::createWithDefaultClient();
        $handler->addMiddleware(new UsernameTokenAuthentication($userName, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(PocztaPolskaTrackingClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new PocztaPolskaTrackingClient($engine, $eventDispatcher);
    }
}
