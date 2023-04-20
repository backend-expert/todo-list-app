<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /*
    * @var string[]
    */
    protected $fillable = [
        'label',
        'is_complete',

    ];


    /**
     * This function returns a collection of TodoTask objects associated with a specific instance of a
     * model.
     *
     * @return A relationship between the current model and the TodoTask model is being returned.
     * Specifically, a "has many" relationship is being established, indicating that the current model
     * can have multiple TodoTask instances associated with it.
     */
    public function tasks(){
        return $this->hasMany(TodoTask::class);
    }
}
