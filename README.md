https://github.com/16kaushika/laravel-dynamic-api

composer install

php artisan key:generate

php artisan migrate


-----------

# Additional notes

## Crone every 10 min for demo page data cleanup
```*/10 * * * * cd ~/public_html/dynamic-api.gohiljaykumar.com && php artisan app:seven-minute-cron >> /dev/null 2>&1```
