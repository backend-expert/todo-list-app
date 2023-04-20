<?php
namespace App\Services;

use App\Exceptions\LoginInvalidException;


class AuthService{

   /**
    * This is a PHP function for logging in with a debug message.
    */
    public function login(string $email, string $password)
    {
        $credencials = [
            'email'=>$email,
            'password'=>$password,
        ];

        // if($token = Auth::attempt(['email' => $email, 'password' => $password]))
        if(!$token = auth()->attempt($credencials)){

            throw new LoginInvalidException(
                'test error'
            );



        };

        return [
            'access_token'=> $token,
            'token_type'=> 'Bearer'

        ];
    }

}
