<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiOdDoResponse;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiPlResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Message;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkiOdDo;

/**
 * @see SprawdzPrzesylkiOdDoResponse
 */
final class CheckShipmentsInDateRangeResponse implements ResultInterface
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

    public static function fromSprawdzPrzesylkiOdDoResponse(SprawdzPrzesylkiOdDoResponse $sprawdzPrzesylkiOdDoResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiOdDoResponse->getReturn()));
    }
}
