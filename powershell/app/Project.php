<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    // protected $fillable = [
    //     'name', 'discription',
    // ];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
    	$this->tasks()->create($task);
    }
}
