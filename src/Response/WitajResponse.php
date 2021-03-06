<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Response;

use Phpro\SoapClient\Type\ResultInterface;

final class WitajResponse implements ResultInterface
{
    private string $return;

    public function __construct(string $return)
    {
        $this->return = $return;
    }

    public function getReturn(): string
    {
        return $this->return;
    }
}
