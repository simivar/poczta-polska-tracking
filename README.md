# Poczta Polska Tracking

Fully translated communication with tracking service of the Polish national postal service Poczta Polska

Currently supported version: 0.71

## Example

```php
use Simivar\PocztaPolskaTracking\PocztaPolskaTrackingClientFactory;

require_once('vendor/autoload.php');

$factory = PocztaPolskaTrackingClientFactory::factory();
echo $factory->version()->getReturn(); // prints "tt 0.71"
```

## Available API
| Client method                     | WSDL Action               | Description                                                                    |
| --------------------------------- | ------------------------- | ------------------------------------------------------------------------------ |
| version()                         | wersja                    | returns the current version of the Web Service                                 |
| hello()                           | witaj                     | method for testing of parameter passing                                        |
| maximumShipmentTrackingNumbers()  | maksymalnaLiczbaPrzesylek | returns maximum number of tracking numbers passed to checkShipments*() methods |
| checkShipment()                   | sprawdzPrzesylke          | returns information about one Shipment with details about Offices              |
| checkPolishShipment()             | sprawdzPrzesylkePl        | returns information about one Shipment without details about Offices           |
| checkShipments()                  | sprawdzPrzesylki          | returns information about Shipments with details about Offices                 |
| checkPolishShipments()            | sprawdzPrzesylkiPl        | returns information about Shipments without details about Offices              |
| checkShipmentsInDateRange()       | sprawdzPrzesylkiOdDo      | returns information about Shipments with details about Offices                 |
| checkPolishShipmentsInDateRange() | sprawdzPrzesylkiOdDoPl    | returns information about Shipments without details about Offices              |
