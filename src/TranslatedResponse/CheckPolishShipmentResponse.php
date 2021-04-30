<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkePlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Shipment;

final class CheckPolishShipmentResponse implements ResultInterface
{
    private Shipment $shipment;

    public function __construct(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }

    public function getShipment(): Shipment
    {
        return $this->shipment;
    }

    public static function fromSprawdzPrzesylkePlResponse(SprawdzPrzesylkePlResponse $sprawdzPrzesylkeResponse): self
    {
        return new self(
            Shipment::fromPrzesylka($sprawdzPrzesylkeResponse->getReturn())
        );
    }
}
