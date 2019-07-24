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
First install graphql-playground
```php
composer require mll-lab/laravel-graphql-playground
```

Visit http://127.0.0.1:8000/graphql-playground on your browser to test the API

Alternatively you can use Postman, Insomnia or GraphQL Playground apps
Use this url: http://localhost:8000/graphql

## Seeding the database
Simply run
```php
composer seed
```
## Queries and Mutations

## Fetch books

```
query {
  books {
    id
    title
    author
    description
    image
    link
    description
    featured
    category {
      name
    }
  }
}
```

## Fetch a single book
```
query {
  book(id: 1) {
    id
    title
    author
    description
    image
    link
    description
    featured
    category {
      name
    }
  }
}

```
## Fetch all categories
```
query {
  categories {
    name
  }
}
```

## Fetch a single category
```
query {
  category(id: 1) {
    name
  }
}
```

## Fetch all books in a category
```
query {
  category(id:1) {
    id
    name
    books {
      id
      image
      link
      category {
        name
      }
    }
  }
}
```
## Fetch all featured books
```
query {
  booksByFeatured(featured: true) {
    title
  }
}
```
