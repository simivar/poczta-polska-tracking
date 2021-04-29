<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Komunikat;

/**
 * @see Komunikat
 */
final class Message
{
    private ?ShipmentsList $shipmentsList;
    private int $status;

    public function __construct(ShipmentsList $shipmentsList, int $status)
    {
        $this->shipmentsList = $shipmentsList;
        $this->status = $status;
    }

    public function getShipmentsList(): ShipmentsList
    {
        return $this->shipmentsList;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public static function fromKomunikat(Komunikat $komunikat): self
    {
        return new self(ShipmentsList::fromListaPrzesylek($komunikat->getPrzesylki()), $komunikat->getStatus());
    }
}
