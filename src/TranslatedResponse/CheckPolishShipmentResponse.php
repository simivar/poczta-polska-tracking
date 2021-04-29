<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkePlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Shipment;

final class CheckPolishShipmentResponse implements ResultInterface
{
    private Shipment $return;

    public function __construct(Shipment $return)
    {
        $this->return = $return;
    }

    public function getReturn(): Shipment
    {
        return $this->return;
    }

    public function withReturn(Shipment $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }

    public static function fromSprawdzPrzesylkePlResponse(SprawdzPrzesylkePlResponse $sprawdzPrzesylkeResponse): self
    {
        return new self(
            Shipment::fromPrzesylka($sprawdzPrzesylkeResponse->getReturn())
        );
    }
}