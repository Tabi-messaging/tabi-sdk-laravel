# Changelog

## Unreleased

## 0.1.1 - 2026-04-20

### Changed

- **README:** Full documentation parity with `tabi/sdk` — table of contents, configuration, resolving the client (DI / facade / container), OTP section, resource groups, per-resource examples (Auth through Workspaces), error handling, return values, related links. Clarified `sendLocation` / `sendSticker` request shapes and analytics behaviour vs the HTTP API.

## 0.1.0 - 2026-04-20

### Added

- Initial release: `TabiServiceProvider` registers `Tabi\SDK\TabiClient` as a singleton from `config/tabi.php` (`TABI_API_KEY`, `TABI_BASE_URL`).
- Optional `Tabi` facade (`Tabi\Laravel\Facades\Tabi`).
- Composer meta: `homepage` and `support.docs` point to `https://tabi.africa/sdks`.
- Dependency on `tabi/sdk` ^0.3.
