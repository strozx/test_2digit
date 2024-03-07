# Test of importing large CSV data


##Instalation instructions
If using docker use Laravel sail:
Make sure docker is running then
```
1. composer install
2. ./vendor/bin/sail up
3. sail artisan migrate
4. sail artisan db:seed

```
If installing trough XAMPP/LAMPP
```
1. composer install
2. php artisan migrate
3. php artisan db:seed

```

Files of interest
>app/Http/Services/FileService.php
>app/Http/Controllers/HomeController.php
>resources/views/welcome.blade.php
>database/migrations/2024_03_06_232843_create_people_table.php
>database/migrations/2024_03_06_23000_create_countries_table.php


First I parse the data with league/csv package to a Collection then I prepare data object with the same key as they are in the DB table. Then upsert the data based on the unique identifier emso. Upsert will update a row if the data is different or insert if emso is not present.