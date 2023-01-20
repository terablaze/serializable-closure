<?php

use Terablaze\SerializableClosure\Exceptions\PhpVersionNotSupportedException;
use Terablaze\SerializableClosure\SerializableClosure;

it('does not support PHP 7.3', function () {
    new SerializableClosure(function () {
        return 'foo';
    });
})->throws(PhpVersionNotSupportedException::class);
