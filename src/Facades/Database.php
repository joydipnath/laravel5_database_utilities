<?php

namespace Joydip\Laravel5_database_utilities\Facades;

use Illuminate\Support\Facades\Facade;

class Database extends Facade{
    
    // return an object of our database class
    protected  static function getFacadeAccessor(){
        
        // return 'joydip-laravel5_database_utilities';
        return 'joydip-database';
    }
    
}
