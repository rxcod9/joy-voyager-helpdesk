# Joy VoyagerHelpdesk

This [Laravel](https://laravel.com/)/[Voyager](https://voyager.devdojo.com/) module adds VoyagerHelpdesk support to Voyager.

By 🐼 [Ramakant Gangwar](https://github.com/rxcod9).

[![Screenshot](https://raw.githubusercontent.com/rxcod9/joy-voyager-helpdesk/main/cover.jpg)](https://joy-voyager-helpdesk.herokuapp.com)

[![Latest Version](https://img.shields.io/github/v/release/rxcod9/joy-voyager-helpdesk?style=flat-square)](https://github.com/rxcod9/joy-voyager-helpdesk/releases)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/rxcod9/joy-voyager-helpdesk/run-tests?label=tests)
[![Total Downloads](https://img.shields.io/packagist/dt/joy/voyager-helpdesk.svg?style=flat-square)](https://packagist.org/packages/joy/voyager-helpdesk)

---

## Prerequisites

*   Composer Installed
*   [Install Laravel](https://laravel.com/docs/installation)
*   [Install Voyager](https://github.com/the-control-group/voyager)

---

## Installation

```bash
# 1. Require this Package in your fresh Laravel/Voyager project
composer require joy/voyager-helpdesk

# 2. Publish
php artisan vendor:publish --provider="Joy\VoyagerHelpdesk\VoyagerHelpdeskServiceProvider" --force
```

---

<!-- ## Usage

Installation generates.

--- -->

<!-- ## Views Customization

In order to override views delivered by Voyager DataTable, copy contents from ``vendor/joy/voyager-helpdesk/resources/views`` to the ``views/vendor/joy-voyager-helpdesk`` directory of your Laravel installation. -->

## Working Example

You can try laravel demo here [https://joy-voyager-helpdesk.herokuapp.com/api/documentation](https://joy-voyager-helpdesk.herokuapp.com/api/documentation).

## Documentation

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the joy voyager-helpdesk? Feel free to [create an issue on GitHub](https://github.com/rxcod9/joy-voyager-helpdesk/issues), we'll try to address it as soon as possible.

If you've found a bug regarding security please mail [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## Upgrading

Please see [UPGRADING](UPGRADING.md) for details.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Credits

- [Ramakant Gangwar](https://github.com/rxcod9)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
