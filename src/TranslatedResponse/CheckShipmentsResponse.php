<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Message;

/**
 * @see SprawdzPrzesylkiResponse
 */
final class CheckShipmentsResponse implements ResultInterface
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

    /**
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public static function fromSprawdzPrzesylkiResponse(SprawdzPrzesylkiResponse $sprawdzPrzesylkiPlResponse): self
    {
        return new self(Message::fromKomunikat($sprawdzPrzesylkiPlResponse->getReturn()));
    }
}
