alay
====

[![Build Status](https://travis-ci.org/gedex/alay.png?branch=master)](https://travis-ci.org/gedex/alay)

> Paket alay menyediakan utilitas untuk mengkonversi string menjadi string alay, dan sebaliknya.

## Instal

Melalui composer:

```
composer require gedex/alay
```

## Contoh

```
use Gedex\Alay

Alay::toAlay("saya keren") // "s4y4 k3r3n"
Alay::normalize("s4y4 k3r3n") // "saya keren"
```

## Lisensi

MIT
