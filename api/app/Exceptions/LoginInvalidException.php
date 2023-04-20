<?php

namespace App\Exceptions;

use Exception;

class LoginInvalidException extends Exception{

    protected $message = 'email ou senha invalido!';

    public function render()
    {
        return response()->json([
            'error'=>class_basename($this),
            // 'message'=> 'email ou senha inválido!'
            // 'message'=> $this->getMessage()
            'message'=> $this->message

        ], 401);

    }
}
