<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
