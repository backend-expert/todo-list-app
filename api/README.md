# start
`composer create laravel/laravel:^9.0`
`composer require tymon/jwt-auth`

1. publique o jwt 
`php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"`

2. Generate secret key
`php artisan jwt:secret`

model 
`php artisan make:model PasswordReset`
table
`php artisan make:migration  create_todo_table --create`
Controller
`php artisan make:controller AuthController`
Request
`php artisan make:request AuthLoginRequest`
Criando Uma Exception 
`php artisan make:exception LoginInvalidException`
gerar key app
`php artisan key:generate`
Resource
`php artisan make:resource UserResource`
