<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipments;

/**
 * @internal
 */
final class SprawdzPrzesylki implements RequestInterface
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

    public static function fromCheckShipments(CheckShipments $checkShipments): self
    {
        return new self($checkShipments->getTrackingNumbersList());
    }
}
