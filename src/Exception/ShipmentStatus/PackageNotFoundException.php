<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Exception\ShipmentStatus;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatusException;

final class PackageNotFoundException extends ShipmentStatusException
{
    protected $message = 'There was no package with specified tracking number with events in the last 30 days';
}
