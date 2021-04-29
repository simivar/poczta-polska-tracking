<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Message;

/**
 * @see SprawdzPrzesylkiResponse
 */
final class CheckShipmentsResponse implements ResultInterface
{
    private Message $return;

    public function __construct(Message $return)
    {
        $this->return = $return;
    }

    public function getReturn(): Message
    {
        return $this->return;
    }

    public function withReturn(Message $return): self
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }

    public static function fromSprawdzPrzesylkiResponse(SprawdzPrzesylkiResponse $sprawdzPrzesylkiPlResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiPlResponse->getReturn()));
    }
}
