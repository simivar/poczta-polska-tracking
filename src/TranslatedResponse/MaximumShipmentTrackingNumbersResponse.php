<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\MaksymalnaLiczbaPrzesylekResponse;

/**
 * @see MaksymalnaLiczbaPrzesylekResponse
 */
final class MaximumShipmentTrackingNumbersResponse implements ResultInterface
{
    private int $maximumShipmentTrackingNumbers;

    public function __construct(int $maximumShipmentTrackingNumbers)
    {
        $this->maximumShipmentTrackingNumbers = $maximumShipmentTrackingNumbers;
    }

    public function getMaximumShipmentTrackingNumbers(): int
    {
        return $this->maximumShipmentTrackingNumbers;
    }

    public static function fromMaksymalnaLiczbaPrzesylekResponse(MaksymalnaLiczbaPrzesylekResponse $maksymalnaLiczbaPrzesylekResponse): self
    {
        return new self($maksymalnaLiczbaPrzesylekResponse->getReturn());
    }
}
