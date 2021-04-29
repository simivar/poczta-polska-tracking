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

    public function withDateTime(string $dateTime): self
    {
        $new = clone $this;
        $new->dateTime = $dateTime;

        return $new;
    }

    public function getOffice(): Office
    {
        return $this->office;
    }

    public function withOffice(Office $office): self
    {
        $new = clone $this;
        $new->office = $office;

        return $new;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function withCode(string $code): self
    {
        $new = clone $this;
        $new->code = $code;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): self
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getReason(): ?Reason
    {
        return $this->reason;
    }

    public function withReason(?Reason $reason): self
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }

    public static function fromZdarzenie(Zdarzenie $zdarzenie): self
    {
        $reason = null;
        if ($zdarzenie->getPrzyczyna()) {
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
