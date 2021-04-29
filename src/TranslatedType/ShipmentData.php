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

    public function withDateOfPosting(DateTimeInterface $dateOfPosting): self
    {
        $new = clone $this;
        $new->dateOfPosting = $dateOfPosting;

        return $new;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function withFormat(string $format): self
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    public function getOriginCountryCode(): string
    {
        return $this->originCountryCode;
    }

    public function withOriginCountryCode(string $originCountryCode): self
    {
        $new = clone $this;
        $new->originCountryCode = $originCountryCode;

        return $new;
    }

    public function getDestinationCountryCode(): string
    {
        return $this->destinationCountryCode;
    }

    public function withDestinationCountryCode(string $destinationCountryCode): self
    {
        $new = clone $this;
        $new->destinationCountryCode = $destinationCountryCode;

        return $new;
    }

    public function getTypeOfDeliveryCode(): string
    {
        return $this->typeOfDeliveryCode;
    }

    public function withTypeOfDeliveryCode(string $typeOfDeliveryCode): self
    {
        $new = clone $this;
        $new->typeOfDeliveryCode = $typeOfDeliveryCode;

        return $new;
    }

    public function getOriginCountry(): string
    {
        return $this->originCountry;
    }

    public function withOriginCountry(string $originCountry): self
    {
        $new = clone $this;
        $new->originCountry = $originCountry;

        return $new;
    }

    public function getDestinationCountry(): string
    {
        return $this->destinationCountry;
    }

    public function withDestinationCountry(string $destinationCountry): self
    {
        $new = clone $this;
        $new->destinationCountry = $destinationCountry;

        return $new;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function withWeight(float $weight): self
    {
        $new = clone $this;
        $new->weight = $weight;

        return $new;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function withTrackingNumber(string $trackingNumber): self
    {
        $new = clone $this;
        $new->trackingNumber = $trackingNumber;

        return $new;
    }

    /**
     * "Procedura" is the name of a service from Poczta Polska
     */
    public function getProceduraService(): ProceduraService
    {
        return $this->proceduraService;
    }

    public function withProceduraService(ProceduraService $proceduraService): self
    {
        $new = clone $this;
        $new->proceduraService = $proceduraService;

        return $new;
    }

    public function getTypeOfDelivery(): string
    {
        return $this->typeOfDelivery;
    }

    public function withTypeOfDelivery(string $typeOfDelivery): self
    {
        $new = clone $this;
        $new->typeOfDelivery = $typeOfDelivery;

        return $new;
    }

    public function getOriginOffice(): Jednostka
    {
        return $this->originOffice;
    }

    public function withOriginOffice(Jednostka $originOffice): self
    {
        $new = clone $this;
        $new->originOffice = $originOffice;

        return $new;
    }

    public function getDestinationOffice(): Jednostka
    {
        return $this->destinationOffice;
    }

    public function withDestinationOffice(Jednostka $destinationOffice): self
    {
        $new = clone $this;
        $new->destinationOffice = $destinationOffice;

        return $new;
    }

    public function isServiceCompleted(): bool
    {
        return $this->isServiceCompleted;
    }

    public function withIsServiceCompleted(bool $isServiceCompleted): self
    {
        $new = clone $this;
        $new->isServiceCompleted = $isServiceCompleted;

        return $new;
    }

    public function getEventsList(): EventsList
    {
        return $this->eventsList;
    }

    public function withEventsList(EventsList $eventsList): self
    {
        $new = clone $this;
        $new->eventsList = $eventsList;

        return $new;
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
