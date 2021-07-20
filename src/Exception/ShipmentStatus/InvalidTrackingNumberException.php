<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Exception\ShipmentStatus;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatusException;

final class InvalidTrackingNumberException extends ShipmentStatusException
{
    /** @var string */
    protected $message = 'Tracking number is invalid';
}
