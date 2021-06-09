<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkiOdDoPl;

/**
 * @see SprawdzPrzesylkiOdDoPl
 */
final class CheckShipmentsInDateRangeExtended implements RequestInterface
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

    public function getFromDate(): string
    {
        return $this->fromDate;
    }

    public function getToDate(): string
    {
        return $this->toDate;
    }
}
