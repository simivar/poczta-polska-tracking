<?php

namespace Simivar\PocztaPolskaTracking;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Response\MaksymalnaLiczbaPrzesylekResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentExtendedResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentsInDateRangeExtendedResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentsExtendedResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentsInDateRangeResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\CheckShipmentsResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\HelloResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\MaximumShipmentTrackingNumbersResponse;
use Simivar\PocztaPolskaTracking\TranslatedResponse\VersionResponse;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipmentExtended;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipmentsExtended;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipmentsInDateRangeExtended;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipment;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipments;
use Simivar\PocztaPolskaTracking\TranslatedType\CheckShipmentsInDateRange;
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
     * returns information about Shipments with details about Offices
     * "sprawdzPrzesylkiPl" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipmentsExtended(CheckShipmentsExtended $parameters): CheckShipmentsExtendedResponse
    {
        /** @var SprawdzPrzesylkiPlResponse $sprawdzPrzesylkiPlResponse */
        $sprawdzPrzesylkiPlResponse = $this->call('sprawdzPrzesylkiPl', SprawdzPrzesylkiPl::fromCheckShipmentsExtended($parameters));

        return CheckShipmentsExtendedResponse::fromSprawdzPrzesylkiPlResponse($sprawdzPrzesylkiPlResponse);
    }

    /**
     * returns information about one Shipment without details about Offices
     * "sprawdzPrzesylkePl" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipmentExtended(CheckShipmentExtended $parameters): CheckShipmentExtendedResponse
    {
        /** @var SprawdzPrzesylkePlResponse $sprawdzPrzesylkePlResponse */
        $sprawdzPrzesylkePlResponse = $this->call('sprawdzPrzesylkePl', SprawdzPrzesylkePl::fromCheckShipmentExtended($parameters));

        return CheckShipmentExtendedResponse::fromSprawdzPrzesylkePlResponse($sprawdzPrzesylkePlResponse);
    }

    /**
     * returns information about Shipments with details about Offices
     * "sprawdzPrzesylkiOdDo" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipmentsInDateRange(CheckShipmentsInDateRange $parameters): CheckShipmentsInDateRangeResponse
    {
        /** @var SprawdzPrzesylkiOdDoResponse $sprawdzPrzesylkiOdDoResponse */
        $sprawdzPrzesylkiOdDoResponse = $this->call('sprawdzPrzesylkiOdDo', SprawdzPrzesylkiOdDo::fromCheckShipmentsInDateRange($parameters));

        return CheckShipmentsInDateRangeResponse::fromSprawdzPrzesylkiOdDoResponse($sprawdzPrzesylkiOdDoResponse);
    }

    /**
     * Returns the maximum limit of tracking numbers available for checkShipments*() methods
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
     * returns information about one Shipment with details about Offices
     * "sprawdzPrzesylke" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipment(CheckShipment $parameters): CheckShipmentResponse
    {
        /** @var SprawdzPrzesylkeResponse $sprawdzPrzesylkeResponse */
        $sprawdzPrzesylkeResponse = $this->call('sprawdzPrzesylke', SprawdzPrzesylke::fromCheckShipment($parameters));

        return CheckShipmentResponse::fromSprawdzPrzesylkeResponse($sprawdzPrzesylkeResponse);
    }

    /**
     * returns information about Shipments without details about Offices
     * "sprawdzPrzesylkiOdDoPl" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipmentsInDateRangeExtended(CheckShipmentsInDateRangeExtended $parameters): CheckShipmentsInDateRangeExtendedResponse
    {
        /** @var SprawdzPrzesylkiOdDoPlResponse $sprawdzPrzesylkiOdDoPlResponse */
        $sprawdzPrzesylkiOdDoPlResponse = $this->call('sprawdzPrzesylkiOdDoPl', SprawdzPrzesylkiOdDoPl::fromCheckShipmentsInDateRangeExtended($parameters));

        return CheckShipmentsInDateRangeExtendedResponse::fromSprawdzPrzesylkiOdDoPlResponse($sprawdzPrzesylkiOdDoPlResponse);
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
     * returns information about Shipments with details about Offices
     * "sprawdzPrzesylki" WSDL action
     *
     * @throws SoapException
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public function checkShipments(CheckShipments $parameters): CheckShipmentsResponse
    {
        /** @var SprawdzPrzesylkiResponse $sprawdzPrzesylkiResponse */
        $sprawdzPrzesylkiResponse = $this->call('sprawdzPrzesylki', SprawdzPrzesylki::fromCheckShipments($parameters));

        return CheckShipmentsResponse::fromSprawdzPrzesylkiResponse($sprawdzPrzesylkiResponse);
    }
}
