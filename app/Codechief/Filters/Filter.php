<?php 

namespace Codechief\Filters;
use Codechief\Model\User; 

class Filter {
   
    public function __construct(){
       
    }

    public function GetDataFromUserClass(User $class){
        return $class->Display();
    }
}