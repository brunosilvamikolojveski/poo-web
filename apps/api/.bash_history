clear
./vendor/bin/pest
clear
exit
php artisan model:show Category
exit
php artisan make:model Customer -mfs
php artisan migrate
php artisan db:seed --class=CustomerSeeeder
php artisan db:seed --class=CustomerSeeder
php artisan db:seed --class=CustomerSeeder
find database/migrations -iname "*customers*"
cat database/migrations/NOME_QUE_APARECER.php
clear
find database/migrations -iname "*customers*"
cat database/migrations/2026_08_25_223526_create_customers_table.php
nano database/migrations/2026_08_25_223526_create_customers_table.php
php artisan db:seed --class=CustomerSeeder
php artisan migrate:rollback --step=1
php artisan migrate
cat database/migrations/2026_08_25_223526_create_customers_table.php
nano database/migrations/2026_08_25_223526_create_customers_table.php
php artisan migrate:rollback --step=1
php artisan migrate
cat database/migrations/2026_08_25_223526_create_customers_table.php
nano database/migrations/2026_08_25_223526_create_customers_table.php
php artisan migrate
php artisan tinker
php artisan migrate
php artisan db:seed --class=CustomerSeeder
clear
exit
