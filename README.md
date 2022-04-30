# Model Unique Code for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/helmab/model-unique-code.svg?style=flat-square)](https://packagist.org/packages/helmab/model-unique-code)
[![Total Downloads](https://img.shields.io/packagist/dt/helmab/model-unique-code.svg?style=flat-square)](https://packagist.org/packages/helmab/model-unique-code)

Generate unique code for Laravel Model. Example `INV-96752304`

## Installation

You can install the package via composer:

```bash
composer require helmab/model-unique-code
```

## Usage

```php
<?php

namespace App\Models;

use Helmab\ModelUniqueCode\Traits\HasModelUniqueCode;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasModelUniqueCode;
    
    protected $key_unique_code = 'code'; // default
    
    protected $length_unique_code = 8; // default
    
    protected $prefix_unique_code = "INV"; // default with null

    protected $fillable = [
        'code',
    ];
}
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mabhelitc@gmail.com instead of using the issue tracker.

## Credits

-   [Mab Hel](https://github.com/helmab)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
