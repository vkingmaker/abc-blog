<?php

namespace App;

use App\Mail\CommentCreated;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::created(function () {
            \Mail::to('it@armpension.com')->send(new CommentCreated);
        });
    }

    protected $guarded = [];
}
