# A Laravel facade to render Open Graph Protocol tags

[![Latest Version on Packagist](https://img.shields.io/packagist/v/filippo-toso/open-graph-protocol.svg?style=flat-square)](https://packagist.org/packages/filippo-toso/open-graph-protocol)

## Installation

You can install the package via composer:

```bash
composer require filippo-toso/open-graph-protocol
```

## Usage

The `Ogp` facade alias is available everywhere. You can use it in your controllers but also in a service provider or a middleware. 

For instance, in your controller:

```php
Ogp::title('Apple Cookie')
    ->type('article')
    ->image('http://example.org/apple.jpg')
    ->description('Welcome to the best apple cookie recipe never created.')
    ->url();
```

Then in your view, just place this Blade directive where you want to render the Open Graph Protocol tags:

```blade
@ogp
```

### Security

If you discover any security related issues, please email filippo@toso.dev instead of using the issue tracker.

## Acknowledgement

This package is just a simple wrapper around the great [chriskonnertz/open-graph](https://github.com/chriskonnertz/open-graph) package. 

## Credits

- [Filippo Toso](https://github.com/filippotoso)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
