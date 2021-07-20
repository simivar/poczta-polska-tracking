# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- PHPStan, PHPUnit and PHP-CS-Fixer GitHub Actions

### Changed
- All classes of `Type\*` namespace are now marked as `@internal`
- `TranslatedType\Message::$shipmentsList` is not nullable anymore
- `TranslatedType\Office::getOfficeData()` now has nullable return type
- `TranslatedType\OfficeData::getApartmentNumber()` now has nullable return type
- `TranslatedType\RelatedShipment::fromPrzesylkaPowiazana()` now has `self` return type
- `TranslatedType\Shipment::$trackingNumber` is not nullable anymore
- `TranslatedType\ShipmentData::getProceduraService()` now has nullable return type

### Fixed
- `TranslatedType/RelatedShipmentsList::fromListaPrzesylekPowiazanych` is now properly created with all related shipments

### Removed
- Dependency on `php-http/guzzle7-adapter`

## [0.1.0] - 2021-06-10
### Added
- Generic `PocztaPolskaTrackingException` class that all library exceptions should extend
- `ShipmentStatusException` and all child `ShipmentStatus\*` exceptions

### Changed
- **BC BREAK!** `TranslatedType/Shipment::construct()` methods accepts null in `$danePrzesylki` parameter
- **BC BREAK!** Endpoints related to checking packages can throw `ShipmentStatus\*` exceptions
- **BC BREAK!** All `Polish*` methods and classes  changed to `Extended*`

### Removed
- **BC BREAK!** All `with*()` methods from Type and TranslatedType classes

## [0.0.1] - 2021-04-29
### Added
- First release

[Unreleased]: https://github.com/simivar/poczta-polska-tracking/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/simivar/poczta-polska-tracking/releases/tag/v0.1.0
[0.0.1]: https://github.com/simivar/poczta-polska-tracking/releases/tag/v0.0.1