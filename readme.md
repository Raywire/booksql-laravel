## Title
Booksql

## Description
A library for viewing books which includes categories and featured books

## Running the API
It's very simple to get the API up and running. First, create the database (and database user if necessary) and add them to the .env file.

```env
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, and run the server:

```php
composer install
php artisan migrate
php artisan serve
```

## Testing Environment
Visit http://127.0.0.1:8000/graphql-playground on your browser to test the API

Alternatively you can use Postman or Insomnia

Use this url: http://localhost:8000/graphql

## Seeding the database
Simply run
```php
composer seed
```
## Queries and Mutations

