<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Type;

use Phpro\SoapClient\Type\RequestInterface;

final class SprawdzPrzesylkiOdDoPl implements RequestInterface
{
    private string $numer;
    private string $odDnia;
    private string $doDnia;

    public function __construct(string $numer, string $odDnia, string $doDnia)
    {
        $this->numer = $numer;
        $this->odDnia = $odDnia;
        $this->doDnia = $doDnia;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public function withNumer(string $numer): self
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    public function getOdDnia(): string
    {
        return $this->odDnia;
    }

    public function withOdDnia(string $odDnia): self
    {
        $new = clone $this;
        $new->odDnia = $odDnia;

        return $new;
    }

    public function getDoDnia(): string
    {
        return $this->doDnia;
    }

    public function withDoDnia(string $doDnia): self
    {
        $new = clone $this;
        $new->doDnia = $doDnia;

        return $new;
    }
}
