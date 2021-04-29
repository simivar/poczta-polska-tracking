# Poczta Polska Tracking

Fully translated communication with tracking service of the Polish national postal service Poczta Polska

Currently supported version: 0.71

## Example

```php
use Simivar\PocztaPolskaTracking\PocztaPolskaTrackingClientFactory;

require_once('vendor/autoload.php');

$factory = PocztaPolskaTrackingClientFactory::factory();
echo $factory->wersja(); // returns "tt 0.71"
```