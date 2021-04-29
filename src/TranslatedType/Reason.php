<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Przyczyna;

/**
 * @see Przyczyna
 */
final class Reason
{
    private string $code;
    private string $name;

    public function __construct(string $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
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

    public static function fromPrzyczyna(Przyczyna $przyczyna): self
    {
        return new self($przyczyna->getKod(), $przyczyna->getNazwa());
    }
}
