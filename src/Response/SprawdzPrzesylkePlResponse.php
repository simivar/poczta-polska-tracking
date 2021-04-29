<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Response;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Type\Przesylka;

final class SprawdzPrzesylkePlResponse implements ResultInterface
{
    private Przesylka $return;

    public function __construct(Przesylka $return)
    {
        $this->return = $return;
    }

    public function getReturn(): Przesylka
    {
        return $this->return;
    }

    public function withReturn(Przesylka $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
