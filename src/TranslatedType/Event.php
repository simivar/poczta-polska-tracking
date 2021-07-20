<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Zdarzenie;

/**
 * @see Zdarzenie
 */
final class Event
{
    private string $dateTime;
    private Office $office;
    private string $code;
    private bool $isServiceCompleted;
    private string $name;
    private ?Reason $reason;

    public function __construct(string $dateTime, Office $office, string $code, bool $isServiceCompleted, string $name, ?Reason $reason)
    {
        $this->dateTime = $dateTime;
        $this->office = $office;
        $this->code = $code;
        $this->isServiceCompleted = $isServiceCompleted;
        $this->name = $name;
        $this->reason = $reason;
    }

    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    public function getOffice(): Office
    {
        return $this->office;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function isServiceCompleted(): bool
    {
        return $this->isServiceCompleted;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getReason(): ?Reason
    {
        return $this->reason;
    }

    public static function fromZdarzenie(Zdarzenie $zdarzenie): self
    {
        $reason = null;
        if ($zdarzenie->getPrzyczyna() !== null) {
            $reason = Reason::fromPrzyczyna($zdarzenie->getPrzyczyna());
        }

        return new self(
            $zdarzenie->getCzas(),
            Office::fromJednostka($zdarzenie->getJednostka()),
            $zdarzenie->getKod(),
            $zdarzenie->isKonczace(),
            $zdarzenie->getNazwa(),
            $reason,
        );
    }
}
