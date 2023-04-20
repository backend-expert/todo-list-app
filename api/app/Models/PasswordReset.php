<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    /* `const UPDATED_AT = null;` is setting the `updated_at` column to null in the `password_resets`
    table. This means that the `updated_at` column will not be automatically updated when a record
    is updated in the table. */
    const UPDATED_AT =null ;


    /*
    * @var string[]
    */
    protected $fillable = [
        "email",
        "token"
    ];
}
