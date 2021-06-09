# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- Generic `PocztaPolskaTrackingException` class that all library exceptions should extend
- `ShipmentStatusException` and all child `ShipmentStatus\*` exceptions

### Changed
- **BC BREAK!** `TranslatedType/Shipment::construct()` methods accepts null in `$danePrzesylki` parameter
- **BC BREAK!** Endpoints related to checking packages can throw `ShipmentStatus\*` exceptions

### Removed
- **BC BREAK!** All `with*()` methods from Type and TranslatedType classes

## [0.0.1] - 2014-05-31
### Added
- First release

[Unreleased]: https://github.com/simivar/poczta-polska-tracking/compare/v0.0.1...HEAD
[0.0.1]: https://github.com/simivar/poczta-polska-tracking/releases/tag/v0.0.1