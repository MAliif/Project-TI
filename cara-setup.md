# Langkah-langkah set up
composer update
rename file .env-example -> .env
php artisan key:generate
npm install

# Run command
php artisan serve
npm run dev

# Data dummy
php artisan migrate:refresh --seed

# File yang tidak perlu dipush
package-lock.json
.env.example