<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\ListaZdarzen;

/**
 * @see ListaZdarzen
 */
final class EventsList
{
    /**
     * @var Event[]
     */
    private array $events;

    /**
     * @param Event[] $events
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }

    /**
     * @return Event[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    public static function fromListaZdarzen(ListaZdarzen $listaZdarzen): self
    {
        $listOfZdarzenie = $listaZdarzen->getZdarzenie();
        $events = [];
        foreach ($listOfZdarzenie as $zdarzenie) {
            $events[] = Event::fromZdarzenie($zdarzenie);
        }

        return new self($events);
    }
}
