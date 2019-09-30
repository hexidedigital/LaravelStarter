## Requirements
- PHP >= 7.2.0
- npm
- nodejs
- [git ^2.23](http://jr0cket.co.uk/2016/06/git-2-9-on-ubuntu-16-04.html)

## Components
- PhpStorm IDE helper for tlint https://plugins.jetbrains.com/plugin/10703-tlint (Alpha with errors)
- [PHP linter - TLINT](https://github.com/tightenco/tlint)
- [JS linter - ESLINT](https://eslint.org)
- [YAAP/Theme](https://packagist.org/packages/yaap/theme)

## Before start
- [Blade templates](https://laravel.com/docs/6.x/blade)
- [Laravel Assets](https://laravel.com/docs/6.x/mix)

## Setup
- `./setup.sh`

## Dev process
- `npm run watch`
- `php artisan serve`


## Build assets for production
`npm run production`

## API mock

In order to mock your API requests put any json files inside the public/api directory.

`http://localhost:8000/api/mock/users/1.json`
`http://localhost:8000/api/mock/settings.json`



## Todo
- ~~php linter~~
- ~~es linter~~
- ~~themes~~
- api stub
- ~~commit hook~~
- sass linter?
