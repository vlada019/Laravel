# Extra

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
* you can autocreate created_at and updated_at columns; check above link as well

## base entities:

* user -> id, name, email, email_verified_at, password, token, created_at, updated_at
* role -> id, name, created_at, updated_at, current_year
* actor -> id, name, gender, year_of_birth, height, weight, size, shoe_size, tel_number, university, black_list, email, spec_skill, role.name, project.date_of_shooting, other_projects, country, city, adress
* model -> id, name, gender, year_of_birth, height, weight, size, shoe_size, tel_number, agency, country, city, black_list, role.name, email, project.name, project.date_of_shooting, spec_skill
* extra -> id, name, gender, year_of_birth, height, weight, size, shoe_size, tel_number, agency, country, city, black_list, role.name, email, project.name, project.date_of_shooting, other_projects, most_used_extras, spec_skill
* kid -> id, name, gender, year_of_birth, tel_number, agency, country, city, black_list, role.name, email, project.name, project.date_of_shooting, other_projects, most_used_extras
* project -> id, name, client, date_of_shooting, created_at, updated_at, finished_at
* file -> idk this one, all i know is that every actor, extra, model and kid has to have a couple of pics and couple of videos and maybe pdf files or .ppt or .doc
* note -> id, name, done


- [] Complete the list according to user table analogy, add missing attributes as well as missing entities
- [] Once above is checked we move to adding migration classes


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
