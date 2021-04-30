<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiPlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Message;

/**
 * @see SprawdzPrzesylkiPlResponse
 */
final class CheckPolishShipmentsResponse implements ResultInterface
{
    private Message $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public static function fromSprawdzPrzesylkiPlResponse(SprawdzPrzesylkiPlResponse $sprawdzPrzesylkiPlResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiPlResponse->getReturn()));
    }
}
