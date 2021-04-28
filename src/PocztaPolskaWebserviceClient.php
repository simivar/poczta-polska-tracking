<?php

namespace Simivar\PocztaPolskaWebservice;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Simivar\PocztaPolskaWebservice\Response\MaksymalnaLiczbaPrzesylekResponse;
use Simivar\PocztaPolskaWebservice\Type\EmptyType;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylke;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylkePl;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkePlResponse;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkeResponse;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylki;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylkiOdDo;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylkiOdDoPl;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkiOdDoPlResponse;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkiOdDoResponse;
use Simivar\PocztaPolskaWebservice\Type\SprawdzPrzesylkiPl;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkiPlResponse;
use Simivar\PocztaPolskaWebservice\Response\SprawdzPrzesylkiResponse;
use Simivar\PocztaPolskaWebservice\Response\WersjaResponse;
use Simivar\PocztaPolskaWebservice\Type\Witaj;
use Simivar\PocztaPolskaWebservice\Response\WitajResponse;

class PocztaPolskaWebserviceClient extends Client
{
    /**
     * @return ResultInterface|WersjaResponse
     * @throws SoapException
     */
    public function wersja(): WersjaResponse
    {
        return $this->call('wersja', new EmptyType());
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
     * @return ResultInterface|MaksymalnaLiczbaPrzesylekResponse
     * @throws SoapException
     */
    public function maksymalnaLiczbaPrzesylek(): MaksymalnaLiczbaPrzesylekResponse
    {
        return $this->call('maksymalnaLiczbaPrzesylek', new EmptyType());
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
     * @param RequestInterface|Witaj $parameters
     * @return ResultInterface|WitajResponse
     * @throws SoapException
     */
    public function witaj(Witaj $parameters): WitajResponse
    {
        return $this->call('witaj', $parameters);
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
