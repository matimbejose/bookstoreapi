## Instalation
1-composer install
2-php migrate:fresh
3-php artisan passport:install


<<<<<<< HEAD
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
1-clone the project.
2-enter the project folder.
3-rename the file .env.example to .env
4-upload the project container. : docker-compose up -d
5-enter inside the container app: docker commpose exec app bash
6-download the project dependencies: composer install
7-generate the project key: php artisan key:generate
8-run the migrations and seed of the project: php artisan migrate
9-install passport: php artisan passport:install
10-start tinker: php artisan tinker
11-create a user just for test: DB::table('users')->insert(['name' => 'Matimbe jose' , 'email'=> 'jose@gmail.com', 'password'=> Hash ::make('1234')]);
12-configure a virtual host(optional, helps in the process of testing the api): http://api.com


## Unit test
1- php artisan test --filter test_user_not_auth_can_view_specifique_auhor



## IMPORTANT
- To access the api after configuring the virtual host: http://api.com:8989/api/v1
- Access the api documentation to test endpoints with swagger: http://api.com:8989//api-documentation/index.html#/
- For test this api wich postman client: https://api.postman.com/collections/27788691-71acb703-029e-4d0a-a74c-d88673a586f0?access_key=PMAT-01H3SHYJ0F4C576CCQPXX7F7JV
=======
## run
php artisan serve
>>>>>>> 8096164b2b397d11160ca6bb97364b5efc38789d
