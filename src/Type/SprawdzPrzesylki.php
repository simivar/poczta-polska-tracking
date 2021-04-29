<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Type;

use Phpro\SoapClient\Type\RequestInterface;

final class SprawdzPrzesylki implements RequestInterface
{
    /** @var string[] */
    private array $numer;

    /**
     * @param string[] $numer
     */
    public function __construct(array $numer)
    {
        $this->numer = $numer;
    }

    /**
     * @return string[]
     */
    public function getNumer(): array
    {
        return $this->numer;
    }

    /**
     * @param string[] $numer
     */
    public function withNumer(array $numer): self
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }
}
