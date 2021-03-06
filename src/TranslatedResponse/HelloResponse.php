<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\WitajResponse;

/**
 * @see WitajResponse
 */
final class HelloResponse implements ResultInterface
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

    public static function fromWitajResponse(WitajResponse $witajResponse): self
    {
        return new self($witajResponse->getReturn());
    }
}
