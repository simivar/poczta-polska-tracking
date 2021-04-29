<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipment;

final class SprawdzPrzesylke implements RequestInterface
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

    public function withNumer(string $numer): self
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    public static function fromCheckShipment(CheckShipment $checkShipment): self
    {
        return new self($checkShipment->getTrackingNumber());
    }
}
