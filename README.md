# Serializable Closure

<a href="https://github.com/terablaze/serializable-closure/actions">
    <img src="https://github.com/terablaze/serializable-closure/workflows/tests/badge.svg" alt="Build Status">
</a>
<a href="https://packagist.org/packages/terablaze/serializable-closure">
    <img src="https://img.shields.io/packagist/l/terablaze/serializable-closure" alt="License">
</a>

## Introduction

> This project is a fork [laravel/serializable-closure](https://github.com/laravel/serializable-closure) package, which is a fork of the excellent [opis/closure: 3.x](https://github.com/opis/closure) package.

Terablaze Serializable Closure provides an easy and secure way to **serialize closures in PHP**.

## Official Documentation

### Installation

> **Requires [PHP 7.4+](https://php.net/releases/)**

First, install Terablaze Serializable Closure via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require terablaze/serializable-closure
```

### Usage

You may serialize a closure this way:

```php
use Terablaze\SerializableClosure\SerializableClosure;

$closure = fn () => 'james';

// Recommended
SerializableClosure::setSecretKey('secret');

$serialized = serialize(new SerializableClosure($closure));
$closure = unserialize($serialized)->getClosure();

echo $closure(); // james;
```

### Caveats

1. Creating **anonymous classes** within closures is not supported.
2. Using attributes within closures is not supported.
3. Serializing closures on REPL environments such as Terablaze Repl is not supported.

## License

Serializable Closure is open-sourced software licensed under the [MIT license](LICENSE.md).
