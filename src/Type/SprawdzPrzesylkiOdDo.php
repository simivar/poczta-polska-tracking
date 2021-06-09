<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipmentsInDateRange;

final class SprawdzPrzesylkiOdDo implements RequestInterface
{
    /** @var string[] */
    private array $numer;
    private string $odDnia;
    private string $doDnia;

    /**
     * @param string[] $numer
     */
    public function __construct(array $numer, string $odDnia, string $doDnia)
    {
        $this->numer = $numer;
        $this->odDnia = $odDnia;
        $this->doDnia = $doDnia;
    }

    /**
     * @return string[]
     */
    public function getNumer(): array
    {
        return $this->numer;
    }

    public function getOdDnia(): string
    {
        return $this->odDnia;
    }

    public function getDoDnia(): string
    {
        return $this->doDnia;
    }

    public static function fromCheckShipmentsInDateRange(CheckShipmentsInDateRange $checkShipmentsInDateRange): self
    {
        return new self(
            $checkShipmentsInDateRange->getTrackingNumbersList(),
            $checkShipmentsInDateRange->getFromDate(),
            $checkShipmentsInDateRange->getToDate(),
        );
    }
}
