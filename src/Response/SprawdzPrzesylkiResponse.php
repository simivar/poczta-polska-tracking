<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Response;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Type\Komunikat;

final class SprawdzPrzesylkiResponse implements ResultInterface
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
}
