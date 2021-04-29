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

    public function withKod(string $kod): self
    {
        $new = clone $this;
        $new->code = $kod;

        return $new;
    }

    public function getBusinessEnvelope(): string
    {
        return $this->businessEnvelope;
    }

    public function withKopertaFirmowa(string $kopertaFirmowa): self
    {
        $new = clone $this;
        $new->businessEnvelope = $kopertaFirmowa;

        return $new;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withNazwa(string $nazwa): self
    {
        $new = clone $this;
        $new->name = $nazwa;

        return $new;
    }

    public function getRelatedShipmentsList(): RelatedShipmentsList
    {
        return $this->relatedShipmentsList;
    }

    public function withRelatedShipmentsList(RelatedShipmentsList $relatedShipmentsList): self
    {
        $new = clone $this;
        $new->relatedShipmentsList = $relatedShipmentsList;

        return $new;
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
