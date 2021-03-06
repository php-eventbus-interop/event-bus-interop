# event-bus-interop

[![code_quality_img]][code_quality]
[![license_img]][license]
[![twitter_img]][twitter]

Interfaces for interoperability between event bus implementations.

## Overview
There are a number of event buses available within PHP, and they all slightly differ in their implementations, while also enforcing that any all events are derived from their interfaces or classes.

This is an effort to have _all_ event buses use common interfaces that allow interoperability between emitters, events and listeners.

## Requirements

The library requires PHP 5.6 or greater.

## Installation

Installation is via [composer]:
```bash
composer require eventbus-interop/eventbus-interop
```
The packages adheres to the [SemVer] specification, and there will be full backward compatibility
between minor versions.

The library contains several interfaces for usage by event buses:

### EventInterface

The interface defines three methods for an event to implement: `name()`, `isPropagationStopped()`, and `stopPropagation()`.

### ListenerInterface

The interface defines one public method, `handle()`, which takes an EventInterface as it's single argument.

### EmitterInterface

This defines three methods: `emit()`, which accepts multiple events as a [variadic]. `emitName()` and `emitEvent()` are used to type hint. A trait, `EmitterTrait`, proxies the individual events received in the variadic created by `emit()` to the corresponding method as appropriate.

### ListenerAcceptorInterface
This defines a simple method, `addListener()`, which accepts three arguments: the event ID to bind the event to, the listener itself, and an optional integer priority.

## Credits

The event bus interop project has been heavily influenced by the work of the [container-interop] project, which led to a robust unification of the various DI containers within the PHP community.


[build_status_img]: https://img.shields.io/travis/eventbus-interop/eventbus-interop.svg "Build Status"
[build_status_travis]: https://travis-ci.org/eventbus-interop/eventbus-interop
[composer]: https://getcomposer.org/
[code_quality]: https://scrutinizer-ci.com/g/php-eventbus-interop/event-bus-interop/?branch=master
[code_quality_img]: https://img.shields.io/scrutinizer/g/php-eventbus-interop/event-bus-interop.svg "Scrutinizer Code Quality"
[container-interop]: https://github.com/container-interop/container-interop
[latest_stable_version_img]: https://img.shields.io/packagist/eventbus-interop/eventbus-interop.svg "Latest Stable Version"
[latest_stable_version]: https://packagist.org/packages/eventbus-interop/eventbus-interop "Latest Stable Version"

[latest_unstable_version_img]: https://img.shields.io/packagist/vpre/eventbus-interop/eventbus-interop.svg "Latest Unstable Version"
[latest_unstable_version]: https://packagist.org/packages/eventbus-interop/eventbus-interop "Latest Unstable Version"
[SemVer]: http://semver.org/
[license_img]: https://img.shields.io/packagist/l/eventbus-interop/eventbus-interop.svg "License"
[license]: https://packagist.org/packages/eventbus-interop/eventbus-interop

[twitter_img]: https://img.shields.io/badge/twitter-%40shrikeh-blue.svg "@shrikeh on Twitter"
[twitter]: https://twitter.com/shrikeh
[variadic]: http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list
[examples]: https://github.com/eventbus-interop/eventbus-interop/tree/master/examples "Link to examples in master"
[docs]: https://github.com/eventbus-interop/eventbus-interop/tree/master/docs "Link to docs in master"
[specs]: https://github.com/eventbus-interop/eventbus-interop/tree/master/spec "Link to specs in master"

