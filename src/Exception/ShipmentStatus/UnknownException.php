<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Exception\ShipmentStatus;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatusException;

final class UnknownException extends ShipmentStatusException
{
    /** @var string */
    protected $message = 'Unknown error';
}
