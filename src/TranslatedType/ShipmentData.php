<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use DateTimeInterface;
use Simivar\PocztaPolskaTracking\Type\DanePrzesylki;
use Simivar\PocztaPolskaTracking\Type\Jednostka;
use Simivar\PocztaPolskaTracking\Type\ListaZdarzen;

/**
 * @see DanePrzesylki
 */
final class ShipmentData
{
    private DateTimeInterface $dateOfPosting;
    /** @var string S|M|L */
    private string $format;
    private string $originCountryCode;
    private string $destinationCountryCode;
    private string $originCountry;
    private string $destinationCountry;
    private Jednostka $originOffice;
    private Jednostka $destinationOffice;
    private string $typeOfDelivery;
    private string $typeOfDeliveryCode;
    /** @var float In kilograms */
    private float $weight;
    private string $trackingNumber;
    private ?ProceduraService $proceduraService;
    private bool $isServiceCompleted;
    private EventsList $eventsList;

    public function __construct(
        DateTimeInterface $dateOfPosting,
        string $format,
        string $originCountryCode,
        string $destinationCountryCode,
        string $typeOfDeliveryCode,
        string $originCountry,
        string $destinationCountry,
        float $weight,
        string $trackingNumber,
        ?ProceduraService $proceduraService,
        string $typeOfDelivery,
        Jednostka $originOffice,
        Jednostka $destinationOffice,
        bool $isServiceCompleted,
        EventsList $eventsList
    ) {
        $this->dateOfPosting = $dateOfPosting;
        $this->format = $format;
        $this->originCountryCode = $originCountryCode;
        $this->destinationCountryCode = $destinationCountryCode;
        $this->typeOfDeliveryCode = $typeOfDeliveryCode;
        $this->originCountry = $originCountry;
        $this->destinationCountry = $destinationCountry;
        $this->weight = $weight;
        $this->trackingNumber = $trackingNumber;
        $this->proceduraService = $proceduraService;
        $this->typeOfDelivery = $typeOfDelivery;
        $this->originOffice = $originOffice;
        $this->destinationOffice = $destinationOffice;
        $this->isServiceCompleted = $isServiceCompleted;
        $this->eventsList = $eventsList;
    }

    public function getDateOfPosting(): DateTimeInterface
    {
        return $this->dateOfPosting;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getOriginCountryCode(): string
    {
        return $this->originCountryCode;
    }

    public function getDestinationCountryCode(): string
    {
        return $this->destinationCountryCode;
    }

    public function getTypeOfDeliveryCode(): string
    {
        return $this->typeOfDeliveryCode;
    }

    public function getOriginCountry(): string
    {
        return $this->originCountry;
    }

    public function getDestinationCountry(): string
    {
        return $this->destinationCountry;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * "Procedura" is the name of a service from Poczta Polska
     */
    public function getProceduraService(): ProceduraService
    {
        return $this->proceduraService;
    }

    public function getTypeOfDelivery(): string
    {
        return $this->typeOfDelivery;
    }
    public function getOriginOffice(): Jednostka
    {
        return $this->originOffice;
    }

    public function getDestinationOffice(): Jednostka
    {
        return $this->destinationOffice;
    }

    public function isServiceCompleted(): bool
    {
        return $this->isServiceCompleted;
    }

    public function getEventsList(): EventsList
    {
        return $this->eventsList;
    }

    public static function fromDanePrzesylki(DanePrzesylki $danePrzesylki): self
    {
        $proceduraService = null;
        if ($danePrzesylki->getProceduraSerwis()) {
            $proceduraService = ProceduraService::fromProcedura($danePrzesylki->getProceduraSerwis());
        }

        return new self(
          $danePrzesylki->getDataNadania(),
          $danePrzesylki->getFormat(),
          $danePrzesylki->getKodKrajuNadania(),
          $danePrzesylki->getKodKrajuPrzezn(),
          $danePrzesylki->getKodRodzPrzes(),
          $danePrzesylki->getKrajNadania(),
          $danePrzesylki->getKrajPrzezn(),
          $danePrzesylki->getMasa(),
          $danePrzesylki->getNumer(),
          $proceduraService,
          $danePrzesylki->getRodzPrzes(),
          $danePrzesylki->getUrzadNadania(),
          $danePrzesylki->getUrzadPrzezn(),
          $danePrzesylki->isZakonczonoObsluge(),
          EventsList::fromListaZdarzen($danePrzesylki->getZdarzenia()),
        );
    }
}
