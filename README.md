# tinkoff-php-client

[![Latest Stable Version](https://poser.pugx.org/davidnadejdin/tinkoff-php-client/v/stable?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-php-client)
[![Total Downloads](https://poser.pugx.org/davidnadejdin/tinkoff-php-client/downloads?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-php-client)
[![Latest Unstable Version](https://poser.pugx.org/davidnadejdin/tinkoff-php-client/v/unstable?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-php-client)
[![License](https://poser.pugx.org/davidnadejdin/tinkoff-php-client/license?format=plastic)](https://packagist.org/packages/davidnadejdin/tinkoff-php-client)

Api client for Tinkoff

## Installation

Install package through Composer

``` bash
$ composer require davidnadejdin/tinkoff-php-client
```

### Example

```php
<?php

include 'vendor/autoload.php';

$client = new \Davidnadejdin\TinkoffClient\Client([
    'Terminal' => "123",
]);

$client->resend([
    'Token' => '123'
]);

```

## Credits

- [David Nadejdin][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](LICENSE) for more information.

## Related packages

- [davidnadejdin/tinkoff-laravel](https://github.com/Davidnadejdin/tinkoff-laravel) Laravel tinkoff facade.

[link-author]: https://github.com/davidnadejdin

[link-contributors]: ../../contributors
