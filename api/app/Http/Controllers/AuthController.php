<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;

    }
    public function login(AuthLoginRequest $request){

        /* ` = ->validated();` is validating the incoming request data based on the rules
        defined in the `AuthLoginRequest` class. If the validation fails, it will return an error
        response. If the validation passes, it will return the validated data in the ``
        variable, which can then be used in the `login` method. This helps to ensure that the data
        being used in the method is valid and meets the required criteria. */
        $input = $request->validated();

        // return $this->authService->login(
        //     $input['email'],
        //     $input['password']
        // );

        $token = $this->authService->login(
            $input['email'],
            $input['password']
        );

        /* The `return (new UserResource(auth()->user()))` is returning a new instance of the
        `UserResource` class with the authenticated user data. The `auth()->user()` method returns
        the currently authenticated user, and the `UserResource` class is responsible for formatting
        the user data into a JSON response. The `->additional()` method call is adding the
        `` variable to the JSON response as additional data. */
        return (new UserResource(
            auth()->user()
        ))->additional($token);
    }
}
