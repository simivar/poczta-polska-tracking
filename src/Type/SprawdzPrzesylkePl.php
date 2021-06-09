<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckPolishShipment;

final class SprawdzPrzesylkePl implements RequestInterface
{
    private string $numer;

    public function __construct(string $numer)
    {
        $this->numer = $numer;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public static function fromCheckPolishShipment(CheckPolishShipment $checkShipment): self
    {
        return new self($checkShipment->getTrackingNumber());
    }
}
