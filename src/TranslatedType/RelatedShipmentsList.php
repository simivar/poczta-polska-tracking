<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\ListaPrzesylekPowiazanych;

/**
 * @see ListaPrzesylekPowiazanych
 */
final class RelatedShipmentsList
{
    /**
     * @var RelatedShipment[]
     */
    private array $relatedShipments;

    /**
     * @param RelatedShipment[] $relatedShipments
     */
    public function __construct(array $relatedShipments)
    {
        $this->relatedShipments = $relatedShipments;
    }

    /**
     * @return RelatedShipment[]
     */
    public function getRelatedShipments(): array
    {
        return $this->relatedShipments;
    }

    /**
     * @param RelatedShipment[] $relatedShipments
     */
    public function withRelatedShipments(array $relatedShipments): self
    {
        $new = clone $this;
        $new->relatedShipments = $relatedShipments;

        return $new;
    }

    public static function fromListaPrzesylekPowiazanych(ListaPrzesylekPowiazanych $listaPrzesylekPowiazanych): self
    {
        $listOfPrzesylkaPowiazana = $listaPrzesylekPowiazanych->getPrzesylkaPowiazana();
        $relatedShipments = [];
        foreach ($listOfPrzesylkaPowiazana as $przesylkaPowiazana) {
            $relatedShipments = RelatedShipment::fromPrzesylkaPowiazana($przesylkaPowiazana);
        }

        return new self($relatedShipments);
    }
}
