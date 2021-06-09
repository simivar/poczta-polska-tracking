<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylki;

/**
 * @see SprawdzPrzesylki
 */
final class CheckShipments implements RequestInterface
{
    /** @var string[] */
    private array $trackingNumbersList;

    /**
     * @param string[] $trackingNumbersList
     */
    public function __construct(array $trackingNumbersList)
    {
        $this->trackingNumbersList = $trackingNumbersList;
    }

    /**
     * @return string[]
     */
    public function getTrackingNumbersList(): array
    {
        return $this->trackingNumbersList;
    }
}
