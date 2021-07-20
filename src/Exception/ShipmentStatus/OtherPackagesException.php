<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Exception\ShipmentStatus;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatusException;

final class OtherPackagesException extends ShipmentStatusException
{
    /** @var string */
    protected $message = 'There are other packages with the same tracking number';
}
