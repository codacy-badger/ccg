![GitHub](https://img.shields.io/github/license/LFFATE/ccg.svg)

# Cs-cart code generator
- [Cs-cart code generator](#cs-cart-code-generator)
  - [Purposes](#purposes)
  - [Features](#features)
  - [Getting started](#getting-started)
    - [Installing](#installing)
    - [Configure](#configure)
    - [Generate](#generate)
    - [Test](#test)
  - [Contributing :fire:](#contributing-fire)
  - [TODO](#todo)


## Purposes

## Features

## Getting started
### Installing
```
~: git clone https://github.com/LFFATE/ccg.git
~: cd ccg
```
### Configure
Open `config/custom.php` and override config values:
```
<?php

$customs['addon'] = [
    'id' => 'my_default_addon_name'
];

```
All other configs you can find at `config/defaults.php`, `config/filesystem.php` and others.

All this options you also can set by command line:
```
~: php ccg.php addon create addon.id=custom_addon_id
```

### Generate
Get help
```
~: cd /path/to/ccg
~: php ccg.php help
```
with debug
```
~: php ccg.php addon create debug=1
```

### Test
```
~: cd /path/to/ccg
~: phpunit --testdox
```
## Contributing :fire:
- Fork
- Code
- Pull request

## TODO
- ~~Handle addonXml remove settings~~ :heavy_check_mark:
- Change namespaces to PSR-0
- Improve tests filesystem (split to directories)
- Copy files from resources to new addon destination on create addon command (ResourcesGenerator)
- ~~Add method to LanguageGenerator to remove langvars by setting id (all variants for the setting and etc.)~~ :heavy_check_mark:
- Improve tests coverage
- Add filesystem decorator for save history of files to be edited/removed