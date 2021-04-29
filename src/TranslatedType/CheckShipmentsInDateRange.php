<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Phpro\SoapClient\Type\RequestInterface;

/**
 * @see SprawdzPrzesylkiOdDo
 */
final class CheckShipmentsInDateRange implements RequestInterface
{
    /** @var string[] */
    private array $trackingNumbersList;
    private string $fromDate;
    private string $toDate;

    /**
     * @param string[] $trackingNumbersList
     */
    public function __construct(array $trackingNumbersList, string $fromDate, string $toDate)
    {
        $this->trackingNumbersList = $trackingNumbersList;
        $this->fromDate = $fromDate;
        $this->toDate = $toDate;
    }

    /**
     * @return string[]
     */
    public function getTrackingNumbersList(): array
    {
        return $this->trackingNumbersList;
    }

    /**
     * @param string[] $numer
     */
    public function withNumer(array $numer): self
    {
        $new = clone $this;
        $new->trackingNumbersList = $numer;

        return $new;
    }

    public function getFromDate(): string
    {
        return $this->fromDate;
    }

    public function withOdDnia(string $odDnia): self
    {
        $new = clone $this;
        $new->fromDate = $odDnia;

        return $new;
    }

    public function getToDate(): string
    {
        return $this->toDate;
    }

    public function withDoDnia(string $doDnia): self
    {
        $new = clone $this;
        $new->toDate = $doDnia;

        return $new;
    }
}
