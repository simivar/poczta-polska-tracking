<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Procedura;

/**
 * @see Procedura
 */
final class ProceduraService
{
    private string $code;
    private string $businessEnvelope;
    private string $name;
    private RelatedShipmentsList $relatedShipmentsList;

    public function __construct(string $code, string $businessEnvelope, string $name, RelatedShipmentsList $relatedShipmentsList)
    {
        $this->code = $code;
        $this->businessEnvelope = $businessEnvelope;
        $this->name = $name;
        $this->relatedShipmentsList = $relatedShipmentsList;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getBusinessEnvelope(): string
    {
        return $this->businessEnvelope;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRelatedShipmentsList(): RelatedShipmentsList
    {
        return $this->relatedShipmentsList;
    }

    public static function fromProcedura(Procedura $procedura): self
    {
        return new self(
            $procedura->getKod(),
            $procedura->getKopertaFirmowa(),
            $procedura->getNazwa(),
            RelatedShipmentsList::fromListaPrzesylekPowiazanych($procedura->getPrzesylkiPowiazane())
        );
    }
}
