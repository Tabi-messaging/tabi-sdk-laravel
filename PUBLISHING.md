# Publishing `tabi/laravel-sdk` (Packagist)

**Canonical repo:** [`Tabi-messaging/tabi-sdk-laravel`](https://github.com/Tabi-messaging/tabi-sdk-laravel). Packagist reads that repository; tags (e.g. `v0.1.0`) become installable versions.

## Workflow

1. **Clone** the package repository (or sync from this monorepo path `projects/waapi/packages/tabi-sdk-laravel/`).

2. **Implement and document** — README, CHANGELOG, tests. Keep [`composer.json`](./composer.json) accurate: `homepage` and **`support.docs`** should point at `https://tabi.africa/sdks`. Avoid `support.source` if you do not want Packagist to emphasize a source-repository link beyond the registered VCS.

3. **Release:** update [`CHANGELOG.md`](./CHANGELOG.md), tag `vMAJOR.MINOR.PATCH`, push the tag.

   ```bash
   git pull origin main
   git tag v0.1.0
   git push origin main
   git push origin v0.1.0
   ```

4. On [Packagist](https://packagist.org/packages/tabi/laravel-sdk), use **Update** if the webhook did not fire.

## First-time Packagist submission

Submit **Submit package** with repository URL `https://github.com/Tabi-messaging/tabi-sdk-laravel` and follow the GitHub service hook instructions.

## Before tagging

- [`CHANGELOG.md`](./CHANGELOG.md) and [`README.md`](./README.md) match what users should see on Packagist.
- Run tests: `./vendor/bin/phpunit`
- No secrets in the repo.
