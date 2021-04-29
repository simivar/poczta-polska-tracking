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

    public static function fromSprawdzPrzesylkiOdDoResponse(SprawdzPrzesylkiOdDoResponse $sprawdzPrzesylkiOdDoResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiOdDoResponse->getReturn()));
    }
}
