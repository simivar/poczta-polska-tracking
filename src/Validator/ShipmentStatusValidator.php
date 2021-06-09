<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Validator;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\TranslatedType\ShipmentStatus;

final class ShipmentStatusValidator
{
    /**
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public static function validate(int $shipmentStatus): bool
    {
        switch ($shipmentStatus) {
            case ShipmentStatus::CODE_OTHER_PACKAGES:
                throw new OtherPackagesException();
            case ShipmentStatus::CODE_NO_EVENTS:
                throw new NoEventsException();
            case ShipmentStatus::CODE_NO_PACKAGE:
                throw new PackageNotFoundException();
            case ShipmentStatus::CODE_INVALID_TRACKING_NUMBER:
                throw new InvalidTrackingNumberException();
            case ShipmentStatus::CODE_UNKNOWN_ERROR:
                throw new UnknownException();
        }

        return true;
    }
}
