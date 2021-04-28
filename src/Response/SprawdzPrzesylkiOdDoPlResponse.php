<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Response;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaWebservice\Type\Komunikat;

final class SprawdzPrzesylkiOdDoPlResponse implements ResultInterface
{
    private Komunikat $return;

    public function __construct(Komunikat $return)
    {
        $this->return = $return;
    }

    public function getReturn(): Komunikat
    {
        return $this->return;
    }

    public function withReturn(Komunikat $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
