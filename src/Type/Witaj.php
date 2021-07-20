<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use Phpro\SoapClient\Type\RequestInterface;

/**
 * @internal
 */
final class Witaj implements RequestInterface
{
    private string $imie;

    public function __construct(string $imie)
    {
        $this->imie = $imie;
    }

    public function getImie(): string
    {
        return $this->imie;
    }
}
