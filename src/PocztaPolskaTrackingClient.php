<?php

namespace Simivar\PocztaPolskaTracking;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaTracking\Response\MaksymalnaLiczbaPrzesylekResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\HelloResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\MaximumShipmentTrackingNumbersResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\VersionResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\Hello;
use Simivar\PocztaPolskaTracking\TranslatedType\EmptyType;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylke;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkePl;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkePlResponse;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkeResponse;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylki;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkiOdDo;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkiOdDoPl;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiOdDoPlResponse;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiOdDoResponse;
use Simivar\PocztaPolskaTracking\Type\SprawdzPrzesylkiPl;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiPlResponse;
use Simivar\PocztaPolskaTracking\Response\SprawdzPrzesylkiResponse;
use Simivar\PocztaPolskaTracking\Response\WersjaResponse;
use Simivar\PocztaPolskaTracking\Response\WitajResponse;

class PocztaPolskaTrackingClient extends Client
{
    /**
     * Returns the current version of WebService
     * "wersja" WSDL action
     *
     * @throws SoapException
     */
    public function version(): VersionResponse
    {
        /** @var WersjaResponse $wersjaResponse */
        $wersjaResponse = $this->call('wersja', new EmptyType());

        return VersionResponse::fromWersjaResponse($wersjaResponse);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylkiPl $parameters
     * @return ResultInterface|SprawdzPrzesylkiPlResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylkiPl(SprawdzPrzesylkiPl $parameters): SprawdzPrzesylkiPlResponse
    {
        return $this->call('sprawdzPrzesylkiPl', $parameters);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylkePl $parameters
     * @return ResultInterface|SprawdzPrzesylkePlResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylkePl(SprawdzPrzesylkePl $parameters): SprawdzPrzesylkePlResponse
    {
        return $this->call('sprawdzPrzesylkePl', $parameters);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylkiOdDo $parameters
     * @return ResultInterface|SprawdzPrzesylkiOdDoResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylkiOdDo(SprawdzPrzesylkiOdDo $parameters): SprawdzPrzesylkiOdDoResponse
    {
        return $this->call('sprawdzPrzesylkiOdDo', $parameters);
    }

    /**
     * Returns the maximum limit of tracking numbers available for checkPolishShipments() and checkExternalShipments()
     * "maksymalnaLiczbaPrzesylek" WSDL action
     *
     * @throws SoapException
     */
    public function maximumShipmentTrackingNumbers(): MaximumShipmentTrackingNumbersResponse
    {
        /** @var MaksymalnaLiczbaPrzesylekResponse $maksymalnaLiczbaPrzesylekResponse */
        $maksymalnaLiczbaPrzesylekResponse = $this->call('maksymalnaLiczbaPrzesylek', new EmptyType());

        return MaximumShipmentTrackingNumbersResponse::fromMaksymalnaLiczbaPrzesylekResponse($maksymalnaLiczbaPrzesylekResponse);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylke $parameters
     * @return ResultInterface|SprawdzPrzesylkeResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylke(SprawdzPrzesylke $parameters): SprawdzPrzesylkeResponse
    {
        return $this->call('sprawdzPrzesylke', $parameters);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylkiOdDoPl $parameters
     * @return ResultInterface|SprawdzPrzesylkiOdDoPlResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylkiOdDoPl(SprawdzPrzesylkiOdDoPl $parameters): SprawdzPrzesylkiOdDoPlResponse
    {
        return $this->call('sprawdzPrzesylkiOdDoPl', $parameters);
    }

    /**
     * Action to test the proper parameter passing
     * "witaj" WSDL action
     *
     * @throws SoapException
     */
    public function hello(Hello $parameters): HelloResponse
    {
        /** @var WitajResponse $witajResponse */
        $witajResponse = $this->call('witaj', $parameters);

        return HelloResponse::fromWitajResponse($witajResponse);
    }

    /**
     * @param RequestInterface|SprawdzPrzesylki $parameters
     * @return ResultInterface|SprawdzPrzesylkiResponse
     * @throws SoapException
     */
    public function sprawdzPrzesylki(SprawdzPrzesylki $parameters): SprawdzPrzesylkiResponse
    {
        return $this->call('sprawdzPrzesylki', $parameters);
    }
}
