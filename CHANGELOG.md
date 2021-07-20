# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
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