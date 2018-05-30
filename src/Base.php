<?php 

namespace Exampleone;

use Carbon\Carbon;



class Base {
    
    public static function hello($name = '')
    {
        
        return 'Hello ' . $name . '! ' . Carbon::now();
        
    }
    
}
