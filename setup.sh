#!/bin/bash

git config core.hooksPath .githooks

if [[ ! -f ".env" ]]; then
  cp .env.example .env
fi

composer install
php artisan key:generate
npm install
