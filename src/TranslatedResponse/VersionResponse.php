<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\WersjaResponse;

final class VersionResponse implements ResultInterface
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

    public function withReturn(string $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }

    public static function fromWersjaResponse(WersjaResponse $wersjaResponse): self
    {
        return new self($wersjaResponse->getReturn());
    }
}
