<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedResponse;

use Phpro\SoapClient\Type\ResultInterface;
use Simivar\PocztaPolskaTracking\Response\WersjaResponse;

/**
 * @see WersjaResponse
 */
final class VersionResponse implements ResultInterface
{
    private string $version;

    public function __construct(string $version)
    {
        $this->version = $version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public static function fromWersjaResponse(WersjaResponse $wersjaResponse): self
    {
        return new self($wersjaResponse->getReturn());
    }
}
