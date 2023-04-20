<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRquest;
use App\Services\AuthService;
use Illuminate\Http\Request;
// use App\Service\AuthService;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;

    }
    public function login(AuthLoginRquest $request){
        // dd('tesette login v1');
        $input = $request->validate();
        dd($input);
        $this->authService->login();
    }
}
