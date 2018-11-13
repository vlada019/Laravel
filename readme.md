# Super

## Installation:

install dependencies:
    composer install

fix perms:
    chmod -R 777 storage

define environment
    cp .env-example .env

## Project based on:

* Laravel 5.7

## development hints:

* primary keys should always be named as id
* think twice about entity relations
* pointers on how to design an entity schema and create proper entity attributes. for more info click [here](https://laravel.com/docs/5.7/migrations)
* always use english for all sort of names [ types, variables, classes .. ]

## Standards and pointers:

* classes should not be longer than 300 LOC
* methods should not be longer than 30 LOC
* all architecture needs to be fully decoupled
* Stick to DRY principles by any means
* commit your code as often as possible
* push your code at least once a day
* if you get stuck for >4h by not being able to solve a problem, ping TL => do not waste time!
* base your implemention on design patterns => do not reinvent the wheel poorly
* HAVE FUN :)

## Development workflow [ this is to be followed later | disregard for now ]:

* all features/issues are done in a seprate branch branched off of develop branch
* name your branches the same as teamwork tasks
* always branch off of develop branch
* no direct commits in develop/master branch
* after you push your branch, request a code reivew in beanstalk and your branch will be merged by TL
* if you need to merge the code in development branch asap so you can continue working, ping the TL
