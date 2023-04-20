<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'is_complete',

    ];


   /**
    * This function defines a relationship between the current class and the Todo class in PHP.
    *
    * @return The `belongsTo` relationship between the current model and the `Todo` model is being
    * returned. This means that the current model belongs to a single `Todo` model instance.
    */
    public function todo(){
        return $this->belongsTo(Todo::class);
    }

}
