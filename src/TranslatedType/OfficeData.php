<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\SzczDaneJednostki;

/**
 * @see SzczDaneJednostki
 */
final class OfficeData
{
    private float $longitude;
    private float $latitude;
    private WorkingHours $workingHours;
    private ?string $city;
    private ?string $houseNumber;
    private ?string $apartmentNumber;
    private ?string $postalAddressNumber;
    private ?string $street;

    public function __construct(
        float $longitude,
        WorkingHours $workingHours,
        ?string $city,
        ?string $houseNumber,
        ?string $apartmentNumber,
        ?string $postalAddressNumber,
        float $latitude,
        ?string $street
    ) {
        $this->longitude = $longitude;
        $this->workingHours = $workingHours;
        $this->city = $city;
        $this->houseNumber = $houseNumber;
        $this->apartmentNumber = $apartmentNumber;
        $this->postalAddressNumber = $postalAddressNumber;
        $this->latitude = $latitude;
        $this->street = $street;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getWorkingHours(): WorkingHours
    {
        return $this->workingHours;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function getApartmentNumber(): string
    {
        return $this->apartmentNumber;
    }

    public function getPostalAddressNumber(): ?string
    {
        return $this->postalAddressNumber;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public static function fromSzczDaneJednostki(SzczDaneJednostki $szczDaneJednostki): self
    {
        return new self(
            $szczDaneJednostki->getDlGeogr(),
            WorkingHours::fromGodzinyPracy($szczDaneJednostki->getGodzinyPracy()),
            $szczDaneJednostki->getMiejscowosc(),
            $szczDaneJednostki->getNrDomu(),
            $szczDaneJednostki->getNrLokalu(),
            $szczDaneJednostki->getPna(),
            $szczDaneJednostki->getSzerGeogr(),
            $szczDaneJednostki->getUlica(),
        );
    }
}
