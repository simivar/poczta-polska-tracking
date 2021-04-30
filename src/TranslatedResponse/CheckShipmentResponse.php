<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkeResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Shipment;

final class CheckShipmentResponse implements ResultInterface
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

    public static function fromSprawdzPrzesylkeResponse(SprawdzPrzesylkeResponse $sprawdzPrzesylkeResponse): self
    {
        return new self(
            Shipment::fromPrzesylka($sprawdzPrzesylkeResponse->getReturn())
        );
    }
}
