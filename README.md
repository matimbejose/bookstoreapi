## API BOOSTORE
A restful api that simulates a system for a living where the responsible of the bookstore create records of books and authors and make a relation between them.


## PROJECT DESCRIPTION
As a way to apply my knowledge in back-end development i decided to create this application, it will also serve as a form of expiration for future applications.


## FUNCTIONALITIES
- Login user
- Creation of records
- List of records


## TECHNOLOGIES USED
- Docker
- Laravel 8
- Laravel passport (gerete jwt acess token)
- Php unit (unit test)
- Openapi/swagger (documention api)


## INITIALIZATION
- 1-CLONE THE PROJECT.

- 2-ENTER THE PROJECT FOLDER.

- 3-RENAME THE FILE .ENV.EXAMPLE TO .ENV

- 4-UPLOAD THE PROJECT CONTAINER. : `docker-compose up -d`

- 5-ENTER INSIDE THE CONTAINER APP: `docker commpose exec app bash`

- 6-DOWNLOAD THE PROJECT DEPENDENCIES: `composer install`

- 7-GENERATE THE PROJECT KEY: `php artisan key:generate`

- 8-RUN THE MIGRATIONS AND SEED OF THE PROJECT: `php artisan migrate`

- 9-INSTALL PASSPORT: `php artisan passport:install`

- 10-START TINKER: `php artisan tinker`

- 11-CREATE A USER JUST FOR TEST: `DB::table('users')->insert(['name' => 'Matimbe jose' , 'email'=> 'jose@gmail.com', 'password'=> Hash ::make('1234')]);`

- 12-CONFIGURE A VIRTUAL HOST(OPTIONAL, HELPS IN THE PROCESS OF TESTING THE API): `http://api.com`


## IMPORTANT
- To access the api after configuring the virtual host: `http://api.com:8989/api/v1`
- Access the api documentation to test endpoints with swagger: `http://api.com:8989//api-documentation/index.html#/`
- For test this api wich postman client: `https://api.postman.com/collections/27788691-71acb703-029e-4d0a-a74c-d88673a586f0?access_key=PMAT-01H3SHYJ0F4C576CCQPXX7F7JV`
