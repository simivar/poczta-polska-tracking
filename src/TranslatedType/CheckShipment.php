<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylke;

/**
 * @see SprawdzPrzesylke
 */
final class CheckShipment implements RequestInterface
{
    private string $trackingNumber;

    public function __construct(string $trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
}
