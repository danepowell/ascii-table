# ascii table

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LTD-Beget/ascii-table/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LTD-Beget/ascii-table/?branch=master)
[![License MIT](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://github.com/LTD-Beget/ascii-table/blob/master/LICENSE)
[![Documentation](https://img.shields.io/badge/code-documented-brightgreen.svg)](http://ltd-beget.github.io/ascii-table/documentation/html/index.html)

Php library with ascii table enum.

## Installation

```shell
composer require ltd-beget/ascii-table
```

## Usage
```php

<?php
    require(__DIR__ . '/vendor/autoload.php');
    
    use LTDBeget\ascii\AsciiControlChar;
    use LTDBeget\ascii\AsciiPrintableChar;
    
    $backspace = AsciiControlChar::BACKSPACE();
    $backspace->getDec();
    $backspace->getChar();
    $backspace->getHex();
    $backspace->isControlChar();
    $backspace->isPrintableChar();
    
    $colon = AsciiPrintableChar::COLON();
    $colon->getDec();
    $colon->getChar();
    $colon->getHex();
    $colon->isControlChar();
    $colon->isPrintableChar();
```
## Developers
### Regenerate documentation
```shell
$ ./vendor/bin/phpdox
```

## License
released under the MIT License.
See the [bundled LICENSE file](LICENSE) for details.
