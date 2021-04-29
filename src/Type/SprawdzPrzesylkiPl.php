<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckPolishShipments;

final class SprawdzPrzesylkiPl implements RequestInterface
{
    /** @var string[] */
    private array $numer;

    /**
     * @param string[] $numer
     */
    public function __construct(array $numer)
    {
        $this->numer = $numer;
    }

    /**
     * @return string[]
     */
    public function getNumer(): array
    {
        return $this->numer;
    }

    /**
     * @param string[] $numer
     */
    public function withNumer(array $numer): SprawdzPrzesylkiPl
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    public static function fromCheckPolishShipments(CheckPolishShipments $checkShipments): self
    {
        return new self($checkShipments->getTrackingNumbersList());
    }
}
