## API BOOSTORE
A RESTFUL API THAT SIMULATES A SYSTEM FOR A LIVING WHERE THE RESPONSIBLE OF THE BOOKSTORE CREATE RECORDS OF BOOKS AND AUTHORS AND MAKE A RELATION BETWEEN THEM.


## PROJECT DESCRIPTION
AS A WAY TO APPLY MY KNOWLEDGE IN BACK-END DEVELOPMENT I DECIDED TO CREATE THIS APPLICATION, IT WILL ALSO SERVE AS A FORM OF EXPIRATION FOR FUTURE APPLICATIONS.


## FUNCTIONALITIES
- LOG IN USER
- CREATION OF RECORDS
- LIST OF RECORDS


## TECHNOLOGIES USED
- LARAVEL 8
- LARAVEL PASSPORT (GERETE JWT ACESS TOKEN)
- PHP UNIT (UNIT TEST)
- OPENAPI/SWAGGER (DOCUMENION API)


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
- TO ACCESS THE API AFTER CONFIGURING THE VIRTUAL HOST: `http://api.com:8989/api/v1`
- ACCESS THE API DOCUMENTATION TO TEST ENDPOINTS WITH SWAGGER: `http://api.com:8989//api-documentation/index.html#/`
- FOR TEST THIS API WICH POSTMAN CLIENT: `https://api.postman.com/collections/27788691-71acb703-029e-4d0a-a74c-d88673a586f0?access_key=PMAT-01H3SHYJ0F4C576CCQPXX7F7JV`