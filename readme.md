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

* user -> id, name, email, verified, password, token, created, updated // loggedin users | used for application access
* role -> id, name, created, updated // this entity can be exported to [.pdf, .jpg, . bmp... file ext.] with resticted access to atributes of one (employee), for example, as a user I want to send suggestion for particular role that is demanded from the client and when I select picks (ones that suites the demand) and I export them to .pdf only selected atributes should apear on exported file
* client -> id, name, email, phone, address, logo[fileId], created, updated // actual client on the project // so you can filter projects per client
* employee -> id, userType[ actor, model, kid, extra, whatever ], name, gender, birthYear, height, weight, size, shoeSize, phone, university, agency, country, city, specSkill, blackList, email, origin, residence, address, job, mostUsedExtras // emplyee is just fine i sopose, the only term that cross my mind was 'archived' or 'one' like one from the whole archive of entities of that userType and its short and simple, again I sopose employee is the most sutable// just to make clear, specSkill can be a list of strings I mean one (employee) can have more special skills, this atribute is maybe the most important as the main or first or special criteria of searching the (one) employee for the right role that is like demand from particular client for particular project :)
* project -> id, name, clientId, shootingDate, finished, created, updated // maybe project can also have userType[commercial, movie, serial, promo, musicVideo]
* engagements -> projectId, userType, userId // userType = [ model, actor, extra .. ], userId -> [modelId, actorId ] // many to many, single table to keep track of project engagements for all types of users and all projects
* file -> id, extension, mimeType, size, path
* media -> userId, userType, fileId // many-to-many between files and users [ actor, model, kid .. ]
* note -> id, name, done, projectId // hmm, note should be related to project but the note contains spec info about one (employee) like, if one is available for shooting of spec. project, if one had shot any commercial in last 2 to 5 years and also the note can contain any specific demand from the client
* session -> sessionId, expired // sopose this is like default entity? 


- [ ] Complete the list according to user table analogy, add missing attributes as well as missing entities
- [ ] Once above is checked we move to adding migration classes


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
