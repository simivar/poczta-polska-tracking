<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkePlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Shipment;

final class CheckShipmentExtendedResponse implements ResultInterface
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

    /**
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public static function fromSprawdzPrzesylkePlResponse(SprawdzPrzesylkePlResponse $sprawdzPrzesylkeResponse): self
    {
        return new self(
            Shipment::fromPrzesylka($sprawdzPrzesylkeResponse->getReturn())
        );
    }
}
