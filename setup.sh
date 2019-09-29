#!/bin/bash

git config core.hooksPath .githooks
git config advice.ignoredHook false

if [[ ! -f ".env" ]]; then
  cp .env.example .env
fi

composer install
php artisan key:generate
npm install
