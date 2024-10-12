https://github.com/16kaushika/laravel-dynamic-api

composer install

php artisan key:generate

php artisan migrate


-----------

# Additional notes

APP_URL=https://localhost:8000 // https must

## Crone every 10 min for demo page data cleanup
```*/10 * * * * cd ~/public_html/dynamic-api.gohiljaykumar.com && php artisan app:seven-minute-cron >> /dev/null 2>&1```
```0 0,12 * * * cd ~/public_html/dynamic-api.gohiljaykumar.com && php artisan app:seven-days-cron >> /dev/null 2>&1```
