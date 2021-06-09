<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Exception\ShipmentStatus;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatusException;

final class NoEventsException extends ShipmentStatusException
{
    protected $message = 'There are no events for specified tracking number during chosen timespan';
}
