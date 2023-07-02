# PHPFuck

Fuck up your PHP

## Install

```
composer require exan/phpfuck
```

## Usage

```php
use Exan\PhpFuck\Fucker;

require './vendor/autoload.php';

$fucker = new Fucker();

echo $fucker->fuckCode(<<<PHP
    echo "Hello, world!", PHP_EOL;
PHP), PHP_EOL; // roughly 17kb
```

### Reference

```php
Exan\PhpFucker\Fucker::fuckInt(int $num)
```
Return a fucked version of any int

```php
Exan\PhpFucker\Fucker::fuckString(string $input)
```
Return a fucked version of any(TM) UTF-8 string

```php
Exan\PhpFucker\Fucker::fuckFunction(string $fn, array $args)
```
Return a fucked version of a function call, args are not automatically fucked

```php
Exan\PhpFucker\Fucker::fuckCode(string $code)
```
Return a fucked version of code. Input should not have PHP opening/closing tags

## Used characters
- `(`
- `)`
- `[`
- `]`
- `@`
- `!`
- `,`
- `.`
- `+`
- `^`
