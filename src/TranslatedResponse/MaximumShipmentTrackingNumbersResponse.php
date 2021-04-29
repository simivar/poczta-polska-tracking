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
    private int $return;

    public function __construct(int $return)
    {
        $this->return = $return;
    }

    public function getReturn(): int
    {
        return $this->return;
    }

    public function withReturn(int $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }

    public static function fromMaksymalnaLiczbaPrzesylekResponse(MaksymalnaLiczbaPrzesylekResponse $maksymalnaLiczbaPrzesylekResponse): self
    {
        return new self($maksymalnaLiczbaPrzesylekResponse->getReturn());
    }
}
