<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

final class ShipmentStatus
{
    public const CODE_OK = 0;
    public const CODE_OTHER_PACKAGES = 1;
    public const CODE_NO_EVENTS = 2;
    public const CODE_NO_PACKAGE = -1;
    public const CODE_INVALID_TRACKING_NUMBER = -2;
    public const CODE_UNKNOWN_ERROR = -99;
}
