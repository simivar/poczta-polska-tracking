<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Middleware;

use Http\Promise\Promise;
use Phpro\SoapClient\Middleware\Middleware;
use Phpro\SoapClient\Xml\SoapXml;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RobRichards\WsePhp\WSSESoap;

final class UsernameTokenAuthentication extends Middleware
{
    private const TOKEN_DIGEST = false;

    private string $userTokenName;
    private string $userTokenPassword;

    public function __construct(string $userTokenName, string $userTokenPassword)
    {
        $this->userTokenName = $userTokenName;
        $this->userTokenPassword = $userTokenPassword;
    }

    public function getName(): string
    {
        return 'usernametoken_authentication';
    }

    public function beforeRequest(callable $handler, RequestInterface $request): Promise
    {
        $xml = SoapXml::fromString((string)$request->getBody());
        $wsse = new WSSESoap($xml->getXmlDocument());

        $wsse->addUserToken($this->userTokenName, $this->userTokenPassword, self::TOKEN_DIGEST);

        $request = $request->withBody($xml->toStream());

        return $handler($request);
    }

    public function afterResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
