# Poczta Polska Tracking

Library connecting with Polish state postal company Poczta Polska tracking webservices

Currently supported version: 0.71

## Example

```php
use Simivar\PocztaPolskaTracking\PocztaPolskaTrackingClientFactory;

require_once('vendor/autoload.php');

$factory = PocztaPolskaTrackingClientFactory::factory();
echo $factory->wersja(); // returns "tt 0.71"
```