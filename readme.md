# Superhero Cheescake Coding challenge 

# (Laravel Image intervention API)


can be tested online on http://ec2-34-242-25-185.eu-west-1.compute.amazonaws.com/

<hr>

## API

The API is generally RESTFUL and returns results in JSON.

|HTTP | resource | Parameters | Description |
| --- | --- | --- | --- |
| POST | /api/create | `filename` should contain a valid Image URL | manipulate the image (add filters) then store it |

<hr>

## Built With (Tech stack)

* php 7.2 with framework [Laravel](https://laravel.com) 
* [Mysql](https://www.mysql.com/)
* [Intervention image library](http://image.intervention.io/)
* [PHPUnit testing](https://phpunit.de/)
* [Postman](https://www.getpostman.com/) for API testing
* [jQuery](https://jquery.com/)
* [Bootstrap](https://getbootstrap.com/)
* [PhpStorm](https://www.jetbrains.com/phpstorm/)
* [AWS](https://aws.amazon.com)

<hr>




## Getting Started

Clone the project repository by running the command below 

```bash
git clone https://github.com/kareemashraf/SHCC.git
```

After cloning, run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

#### Database Migrations

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```


And finally, start the application:

```bash
php artisan serve
```

and visit [http://localhost:8000/](http://localhost:8000/) to see the application in action. (also keep in mind that port 8000 could be different if busy)

#### running PHPUnit test

```bash
composer test
```

<hr>



## Assignment

Build a micro API that accepts an image that performs at least 3 manipulations that change
the composition of the image. This means no resizing or cropping, but rather adding filters
and/or text or other compositing that physically alter the image.
