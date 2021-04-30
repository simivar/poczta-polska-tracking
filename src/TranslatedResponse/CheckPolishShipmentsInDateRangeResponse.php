<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiOdDoPlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Message;

/**
 * @see SprawdzPrzesylkiOdDoPlResponse
 */
final class CheckPolishShipmentsInDateRangeResponse implements ResultInterface
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

    public static function fromSprawdzPrzesylkiOdDoPlResponse(SprawdzPrzesylkiOdDoPlResponse $sprawdzPrzesylkiOdDoResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiOdDoResponse->getReturn()));
    }
}
