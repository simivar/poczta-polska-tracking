<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Response;

use Phpro\SoapClient\Type\ResultInterface;

final class MaksymalnaLiczbaPrzesylekResponse implements ResultInterface
{
    private int $return;

    public function __construct(int $return)
    {
        $this->return = $return;
    }

    public function getReturn(): int
    {
        return $this->return;
    }

    public function withReturn(int $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
